<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselItemsController; // import controller

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/carousel', [CarouselItemsController::class, 'index']);
Route::get('/getSpecificCarousel/{id}', [CarouselItemsController::class, 'show']);
Route::post('/insertCarousel', [CarouselItemsController::class, 'store']); 
Route::put('/updateCarousel/{id}/', [CarouselItemsController::class, 'update']); 
Route::delete('/deleteCarousel/{id}', [CarouselItemsController::class, 'destroy']);