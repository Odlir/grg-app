<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Http\Requests\ProductCategoryRequest;
use Inertia\Inertia;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = ProductCategory::where('status', '1')
            ->latest('products_category.id');

        if (request()->input('name')) {
            $query->where('name', 'LIKE', '%' . request()->input('name') . '%');
        }

        if (request()->input('description')) {
            $query->where('description', 'LIKE', '%' . request()->input('description') . '%');
        }

        $categories = $query->paginate(10)->withQueryString();

        return Inertia::render('ProductsCategory/Index', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCategoryRequest $request)
    {
        \DB::transaction(function () use ($request) {
            $data = new ProductCategory($request->input());
            $data->status = 1;
            $data->save();
        });

        return redirect('products_category');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $products_category)
    {
        return $products_category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductCategoryRequest $request, ProductCategory $products_category)
    {
        \DB::transaction(function () use ($request, $products_category) {
            $products_category->update($request->input());
        });

        return redirect('products_category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $products_category)
    {
        $products_category->status = 0;
        $products_category->save();
        $products_category->delete();
        return redirect('products_category');
    }
}
