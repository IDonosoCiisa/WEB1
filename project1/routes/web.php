<?php

use App\Http\Controllers\ProjectGetAllController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectPostController;
use App\Http\Controllers\ProjectPutController;
use App\Http\Controllers\ProjectDeleteController;




use App\Http\Controllers\ProjectGetOneController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v1/get', [ProjectGetAllController::class, 'getAll']);
Route::get('/v1/get/{id}', [ProjectGetOneController::class, 'getOne']);
Route::delete('/v1/delete/{id}', [ProjectDeleteController::class, 'deleteOne']);
Route::put('/v1/put/{id}', [ProjectPutController::class, 'updateOne']);
Route::post('/v1/post', [ProjectPostController::class, 'createOne']);
