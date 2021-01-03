<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MinistriesController;

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


Route::get('/ministry', [MinistriesController::class, 'getMinistries']);
Route::post('/ministry', [MinistriesController::class, 'createMinistry'])->name('ministry');