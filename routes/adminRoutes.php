<?php

use App\Http\Controllers\CalculoSalarioController;
use App\Http\Controllers\EmpleadoController;
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

Route::get('/', function () {
    return view('welcome');
})->name('panel');
    
Route::resource('empleados', EmpleadoController::class);
Route::post('calcularSalario', [CalculoSalarioController::class, 'salario'])->name('salario');

?>