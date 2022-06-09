<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeAjaxCRUDController;

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
});


Route::get('employee-dt-ajax-crud', [EmployeeAjaxCRUDController::class, 'index']);
Route::post('store-employee', [EmployeeAjaxCRUDController::class, 'store']);
Route::post('edit-employee', [EmployeeAjaxCRUDController::class, 'edit']);
Route::post('delete-employee', [EmployeeAjaxCRUDController::class, 'destroy']);
