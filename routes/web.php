<?php

use App\Http\Controllers\PetController;
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

Route::get('/', [PetController::class, "index"]);
Route::get('/create', [PetController::class, "create"]);
Route::get('/show_pet/{id}',[PetController::class, "show"]);
Route::get('/edit_pet/{id}',[PetController::class, "edit"]);

Route::post('/add_pet', [PetController::class, "store"]);
Route::post('/delete_pet/{id}', [PetController::class, "destroy"]);
Route::post('/update_pet/{id}', [PetController::class, "update"]);