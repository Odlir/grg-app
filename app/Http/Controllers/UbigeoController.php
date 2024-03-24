<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Province;
use App\Models\District;

class UbigeoController extends Controller
{
    function getDepartments()
    {
        $data = Department::all();

        return response()->json($data, 200);
    }

    function getProvinceByDepartmentId($id)
    {
        $data = Province::where('department_id', $id)
        ->get();

        return response()->json($data, 200);
    }

    function getDistrictByProvinceId($id)
    {
        $data = District::where('province_id', $id)
        ->get();

        return response()->json($data, 200);
    }
}
