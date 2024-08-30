<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//get lagu LaguDaerah
Route::get('/lagudaerah', [App\Http\Controllers\Api\LaguController::class, 'index']);


//cek endpoint api
//php artisan route:list
