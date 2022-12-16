<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Configuration of the department controller
use App\Http\Controllers\API\DepartmentsController;
Route::controller(DepartmentsController::class)->group(function () {
    Route::get('/Departments', 'getDepartments');
    Route::post('/Departments/delete','deleteDepartment');
    Route::get('/Departments/{id}', 'getDepartment');
    Route::post('/Departments', 'postDepartment');

});

use App\Http\Controllers\API\EmployeesController;
Route::controller(EmployeesController::class)->group(function () {
    Route::get('/Employees', 'getEmployees');
    Route::post('/Employees/delete','deleteEmployee');
    Route::get('/Employees/{id}', 'getEmployee');
    Route::post('/Employees', 'postEmployees');
});

