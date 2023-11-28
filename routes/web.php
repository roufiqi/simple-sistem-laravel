<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;

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

Route::resource('nasabah', NasabahController::class);

//Route::get('/', [\App\Http\Controllers\NasabahController::class, 'index']);

