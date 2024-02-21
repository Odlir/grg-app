<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PersonController;

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

    Route::get('/people', [PersonController::class, 'index'])->name('person.index');
    Route::get('/people/create', [PersonController::class, 'create'])->name('person.create');
    Route::post('/people', [PersonController::class, 'store'])->name('person.store');
    Route::get('/people/{person}/edit', [PersonController::class, 'show'])->name('person.show');
    Route::post('/people/update', [PersonController::class, 'update'])->name('person.update');
    Route::get('/people/{person}/delete', [PersonController::class, 'destroy'])->name('person.destroy');

});
