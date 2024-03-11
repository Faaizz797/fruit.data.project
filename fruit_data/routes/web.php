<?php

use App\Http\Controllers\FruitController;
use App\Models\Fruit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/table', [FruitController::class,'index']);

Route::get('/input', [FruitController::class,'create']);

Route::post('/store', [FruitController::class,'store']);

Route::get('/{id}/edit', [FruitController::class,'edit']);

Route::put('/update/{id}', [FruitController::class,'update']);

Route::delete('/update/{id}', [FruitController::class,'destroy']);