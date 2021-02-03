<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PagesController,HazardConfigController};
use App\Http\Controllers\{HazardController,AffectedController,UsersController};

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

//Pages Route
Route::get('/dashboard', [PagesController::class, 'dashboard']);
Route::get('/', [PagesController::class, 'login']);

//Route for hazard config
Route::get('/hazard-category', [HazardConfigController::class, 'getHazardCategories']);
Route::post('/hazard-category', [HazardConfigController::class, 'addHazardCategories']);
Route::get('/hazard-type', [HazardConfigController::class, 'getHazardTypes']);
Route::get('/hazard-source', [HazardConfigController::class, 'getHazardSources']);
Route::post('/hazard-source', [HazardConfigController::class, 'addHazardSource']);



//Route for Hazard
Route::get('/hazard-list', [HazardController::class, 'getHazards']);
Route::get('/add-hazard', [HazardController::class, 'getResource']);
Route::get('/update-hazard', [HazardController::class, 'updateHazard']);
Route::get('/getShehias', [HazardController::class, 'getShehias']);
Route::get('/update-hazard/{id}', [HazardController::class, 'getHazardUpdateById']);
Route::post('/add-hazard', [HazardController::class, 'addHazard']);
//Route::get('/update-hazard', [HazardController::class, 'getResourceUpdate']);
Route::get('/hazard-affected/{id}', [HazardController::class, 'getHazardById']);

//Route for User
Route::get('/users-list', [UsersController::class, 'getUsers']);

//Route for Affected
//Route::get('/hazard-affected', [AffectedController::class, 'getAffectedPeoples']);