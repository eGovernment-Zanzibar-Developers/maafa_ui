<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsersController,MinistriesController};

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

//Ministry
Route::get('/institute-config', [MinistriesController::class, 'getInstitutes']);
Route::post('/institute-config', [MinistriesController::class, 'createMinistry']);