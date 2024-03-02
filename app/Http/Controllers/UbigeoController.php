<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;

class UbigeoController extends Controller
{
    function getDepartments()
    {
        $data = Departamento::all();

        return response()->json($data, 200);
    }

    function getProvinceByDepartmentId($id)
    {
        $data = Provincia::where('departamento_id', $id)
        ->get();

        return response()->json($data, 200);
    }

    function getDistrictByProvinceId($id)
    {
        $data = Distrito::where('provincia_id', $id)
        ->get();

        return response()->json($data, 200);
    }
}
