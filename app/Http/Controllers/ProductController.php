<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Product::where('status','1')
        ->with('unitOfMeasure')
        ->with('warehouse')
        ->with('category')
        ->latest('products.id');

        if(request()->input('code')) {
            $query->where('code', 'LIKE', '%' . request()->input('code') . '%');
        }

        if(request()->input('name')) {
            $query->where('name', 'LIKE', '%' . request()->input('name') . '%');
        }

        if(request()->input('unit_of_measure')) {
            $query->whereHas('unitOfMeasure', function ($q){
                $q->where("description", "LIKE", "%".request()->input('unit_of_measure')."%");
            });
        }

        if(request()->input('category')) {
            $query->whereHas('category', function ($q){
                $q->where("description", "LIKE", "%".request()->input('category')."%");
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
        if($request->input('method') === "POST") {
            $product = new Product($request->input());
            $product->save();
        } else {
            $product = Product::find($request->input("id"));
            $product->update($request->input());
        }

        if($request->file('images') && $product) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/products', $imageName);

                $product->image = $imageName;
                $product->save();
            }
        }

        return redirect('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load('unitOfMeasure');
        $product->load('warehouse');
        $product->load('category');

        return $product;
    }

    /**
     * Update the specified resource in storage.
     * This functions not works when you send formData(images), it's a problem of PHP
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->input());

        if($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/products', $imageName);

                $product->image = $imageName;
                $product->save();
            }
        }

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(Product $product)
     {
         $product->status = '0';
         $product->save();
         $product->delete();
         return redirect('products');
     }
}
