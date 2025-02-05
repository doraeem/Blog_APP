<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TempImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('blogs',[BlogController::class,'index']);
Route::post('blogs', [BlogController::class, 'store']);
Route::post('save-temp-image',[TempImageController::class,'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});