<?php

namespace App\Http\Controllers;
use App\Models\DocType;
use App\Models\PersonType;

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
}
