<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Inventory;
use App\Models\InventoryDetail;
use App\Models\Kardex;
use App\Models\Product;
use App\Models\ProductBrandDetail;
use App\Models\ProductWarehouse;
use App\Models\warehouse;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Product::where('status', '1')
            ->with('unitOfMeasure')
            ->with('warehouses')
            ->with('category')
            ->latest('products.id');

        if (request()->input('code')) {
            $query->where('code', 'LIKE', '%' . request()->input('code') . '%');
        }

        if (request()->input('name')) {
            $query->where('name', 'LIKE', '%' . request()->input('name') . '%');
        }

        if (request()->input('unit_of_measure')) {
            $query->whereHas('unitOfMeasure', function ($q) {
                $q->where("description", "LIKE", "%" . request()->input('unit_of_measure') . "%");
            });
        }

        if (request()->input('category')) {
            $query->whereHas('category', function ($q) {
                $q->where("name", "LIKE", "%" . request()->input('category') . "%");
            });
        }

        $products = $query->paginate(10)->withQueryString();

        return Inertia::render('Products/Index', [
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        \DB::transaction(function () use ($request) {
            if ($request->input('method') === "POST") {
                $product = new Product($request->input());
                $product->status = 1;
                $product->save();

                if ($request->input('warehouses_detail') && $product) {
                    foreach ($request->input('warehouses_detail') as $value) {
                        $product_warehouse_detail = new ProductWarehouse(['product_id' => $product->id, 'warehouse_id' => $value['warehouse_id'], 'initial_stock' => $value['initial_stock']]);
                        $product_warehouse_detail->save();

                        Kardex::insert(['product_warehouse_id' => $product_warehouse_detail->id, 'type' => 'initial_entry', 'cost' => $product->cost]);

                        $inventory = Inventory::where('warehouse_id', $value['warehouse_id'])->first();

                        if (!$inventory) {
                            $inventory = new Inventory(['name' => warehouse::find($value['warehouse_id'])->name, 'description' => 'Initial inventory', 'status' => 1, 'warehouse_id' => $value['warehouse_id']]);
                            $inventory->save();
                        }

                        $inventory_detail = new InventoryDetail(['inventory_id' => $inventory->id, 'product_id' => $product->id, 'amount' => $value['initial_stock'], 'status' => 1]);
                        $inventory_detail->save();
                    }
                }
            } else {
                $product = Product::find($request->input("id"));
                $product->update($request->input());
                $product->brands()->detach();
            }

            if ($request->input('brands') && $product) {
                foreach ($request->input('brands') as $value) {
                    $product_brand_detail = new ProductBrandDetail(['product_id' => $product->id, 'product_brand_id' => $value]);
                    $product_brand_detail->save();
                }
            }

            if ($request->file('images') && $product) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->storeAs('public/products', $imageName);

                    $product->image = $imageName;
                    $product->save();
                }
            }
        });

        return redirect('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load('unitOfMeasure');
        $product->load('warehouses');
        $product->load('category');
        $product->load('brands');

        return $product;
    }

    /**
     * Update the specified resource in storage.
     * This functions not works when you send formData(images), it's a problem of PHP
     */
    public function update(ProductRequest $request, Product $product)
    {
        \DB::transaction(function () use ($request, $product) {
            $product->update($request->input());

            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->storeAs('public/products', $imageName);

                    $product->image = $imageName;
                    $product->save();
                }
            }
        });

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Product $product)
    {
        $product->status = 0;
        $product->save();
        $product->delete();
        return redirect('products');
    }
}
