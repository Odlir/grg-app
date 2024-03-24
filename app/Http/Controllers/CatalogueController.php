<?php

namespace App\Http\Controllers;
use App\Models\DocType;
use App\Models\PersonType;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\unitOfMeasure;
use App\Models\warehouse;

class CatalogueController extends Controller
{
    public function getDocTypes() {
        $data = DocType::where('estado', '1')->get();

        return response()->json($data, 200);
    }

    public function getPersonTypes() {
        $data = PersonType::where('estado', '1')->get();

        return response()->json($data, 200);
    }

    public function getUnitsOfMeasure() {
        $data = unitOfMeasure::all();

        return response()->json($data, 200);
    }

    public function getWarehouses() {
        $data = warehouse::where('status', '1')->get();

        return response()->json($data, 200);
    }

    public function getProductCategories() {
        $data = ProductCategory::where('status', '1')->get();

        return response()->json($data, 200);
    }

    public function getProductBrands() {
        $data = ProductBrand::where('status', '1')->get();

        return response()->json($data, 200);
    }
}
