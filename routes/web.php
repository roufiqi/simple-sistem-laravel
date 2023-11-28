<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('nasabah', [\App\Http\Controllers\NasabahController::class, 'index']);
Route::get('nasabah/{id}', [\App\Http\Controllers\NasabahController::class, 'detail'])->where('id', '[0-9]+');

