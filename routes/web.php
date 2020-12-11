<?php

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




Route::get('/Employees/create', [App\Http\Controllers\EmployeesController::class, 'create'])->name('create');
Route::post('Employees', [App\Http\Controllers\EmployeesController::class, 'store'])->name('store');
Route::get('/',  [App\Http\Controllers\EmployeesController::class, 'create'])->name('create');
Route::get('/Employees', [App\Http\Controllers\EmployeesController::class, 'getAllEmployees'])->name('getAllEmployees');
Route::get('/changeStatus', [App\Http\Controllers\EmployeesController::class, 'changeStatus'])->name('changeStatus');
Route::get('/home', [App\Http\Controllers\EmployeesController::class, 'getAllEmployees'])->middleware('auth');

Auth::routes();

