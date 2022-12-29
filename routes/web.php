<?php

use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\IngredientController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\HomeAdmincontroller;
use Illuminate\Support\Facades\Route;

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
Route::get('admin', [HomeAdmincontroller::class,'index'])->name('admin');

Route::resource('admin/sizes', SizeController::class)->names('admin_sizes_c');
Route::resource('admin/ingredients', IngredientController::class)->names('admin_ingredients_c');
Route::resource('admin/specialties', SpecialtyController::class)->names('admin_specialties_c');

Route::get('/', function () {
    return view('welcome');
});
