<?php

use App\Http\Controllers\api\NewsController;
use App\Http\Controllers\api\TestimonyController;
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
Route::get('/alumnistory', [TestimonyController::class, 'index']);
Route::post('/alumnistory/store', [TestimonyController::class, 'store']);
