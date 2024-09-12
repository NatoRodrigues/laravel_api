<?php

 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\beta\TaskController;


Route::prefix('beta')->group(function (){
    Route::apiResource('/tasks', TaskController::class);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

