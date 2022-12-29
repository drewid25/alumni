<?php

use App\Http\Controllers\api\NewsController;
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

// News Route
Route::get('/news', [NewsController::class, 'index']);
Route::post('/news/store', [NewsController::class, 'store']);

// Testimony Route
Route::get('/testimonies', [NewsController::class, 'index']);
Route::post('/testimonies/store', [NewsController::class, 'store']);
