<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\OneChannel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('/regions/{region}', [ApiController::class, 'one_region_page']);

Route::post('/add/channel', [ApiController::class, 'add_channel']);

Route::post('/search', [ApiController::class, 'search_page']);

