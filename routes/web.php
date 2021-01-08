<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsersController,MinistryController};
use App\Http\Controllers\{DepartmentController,DepartmentTypeController};

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


//Users
Route::get('/users-list',[UsersController::class, 'getUsers']);
Route::get('/users-list{id}',[UsersController::class, 'getDeptById']);


//Route for Ministry
Route::get('/ministry', [MinistryController::class, 'getMinistries']);
Route::post('/ministry', [MinistryController::class, 'createMinistry']);

//Route for Department Type
Route::get('/department-type', [DepartmentTypeController::class, 'getDepartmentTypes']);
Route::post('/department-type', [DepartmentTypeController::class, 'createDepartmentType']);

//Route for Department Type
Route::get('/department', [DepartmentController::class, 'getDepartments']);
Route::post('/department', [DepartmentController::class, 'createDepartment']);