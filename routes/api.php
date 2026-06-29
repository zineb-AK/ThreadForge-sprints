<?php

use App\Http\Controllers\Api\BleuprintController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {



Route::get('/bleuprints',[BleuprintController::class,'index']);
Route::post('/bleuprints',[BleuprintController::class,'store']);
Route::get('/bleuprints/{bleuprint}',[BleuprintController::class,'show']);
Route::put('/bleuprints/{bleuprint}',[BleuprintController::class,'update']);
Route::delete('/bleuprints/{bleuprint}',[BleuprintController::class,'destroy']);

});
