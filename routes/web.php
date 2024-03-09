<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\UbigeoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::apiResource('people', PersonController::class);

    Route::get('/doc_types', [CatalogueController::class, 'getDocTypes'])->name('getDocTypes');
    Route::get('/person_types', [CatalogueController::class, 'getPersonTypes'])->name('getPersonTypes');
    Route::get('/departments', [UbigeoController::class, 'getDepartments'])->name('getDepartments');
    Route::get('/provinces/{id}', [UbigeoController::class, 'getProvinceByDepartmentId'])->name('getProvinces');
    Route::get('/districts/{id}', [UbigeoController::class, 'getDistrictByProvinceId'])->name('getDistricts');
});
