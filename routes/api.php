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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::name('martians.')->prefix('martians/{martian}')->group(function () {
    Route::post('trade', [\App\Http\Controllers\API\Martian\MartianController::class, 'trade'])->name('trade');
});
Route::apiResource('martians', \App\Http\Controllers\API\Martian\MartianController::class)->except(['create', 'edit']);
Route::apiResource('supplies', \App\Http\Controllers\API\Supply\SupplyController::class)->except(['create', 'edit']);
