<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadora;

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

Route::get('/', function() {
    return view('index');
});

Route::get('/suma/{operand1}/{operand2}', [calculadora::class, 'suma']);

Route::get('/resta/{operand1}/{operand2}', [calculadora::class, 'resta']);

Route::get('/multiplica/{operand1}/{operand2}', [calculadora::class, 'multiplica']);

Route::get('/divideix/{operand1}/{operand2}', [calculadora::class, 'divideix']);