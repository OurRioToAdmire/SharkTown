<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\EspecieController;
use App\Http\Controllers\TiburonController;
use App\Http\Controllers\ObservacionController;
use App\Http\Controllers\TrackingController;

Route::get('especies',      [EspecieController::class, 'readAll']);
Route::post('especies',     [EspecieController::class, 'create']);
Route::get('especies/{id}', [EspecieController::class, 'readOne']);
Route::put('especies/{id}', [EspecieController::class, 'update']);
Route::delete('especies/{id}', [EspecieController::class, 'delete']);

Route::get('tiburons',      [TiburonController::class, 'readAll']);
Route::post('tiburons',     [TiburonController::class, 'create']);
Route::get('tiburons/{id}', [TiburonController::class, 'readOne']);
Route::put('tiburons/{id}', [TiburonController::class, 'update']);
Route::delete('tiburons/{id}', [TiburonController::class, 'delete']);

Route::get('observacions',      [ObservacionController::class, 'readAll']);
Route::post('observacions',     [ObservacionController::class, 'create']);
Route::get('observacions/{id}', [ObservacionController::class, 'readOne']);
Route::put('observacions/{id}', [ObservacionController::class, 'update']);
Route::delete('observacions/{id}', [ObservacionController::class, 'delete']);

Route::get('trackings',      [TrackingController::class, 'readAll']);
Route::post('trackings',     [TrackingController::class, 'create']);
Route::get('trackings/{id}', [TrackingController::class, 'readOne']);
Route::put('trackings/{id}', [TrackingController::class, 'update']);
Route::delete('trackings/{id}', [TrackingController::class, 'delete']);
