<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//cek endpoint api
//php artisan route:list

//-- END POINT CRUD API --

//get lagu LaguDaerah
Route::get('/lagudaerah', [App\Http\Controllers\Api\LaguController::class, 'index']);

//create lagu LaguDaerah
Route::post('/lagudaerah', [App\Http\Controllers\Api\LaguController::class, 'create']);

//update lagu LaguDaerah
Route::put('/lagudaerah/{id}', [App\Http\Controllers\Api\LaguController::class, 'update']);

//delete lagu LaguDaerah
Route::delete('/lagudaerah/{id}', [App\Http\Controllers\Api\LaguController::class, 'delete']);



