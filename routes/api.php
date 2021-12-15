<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Carousel_item_controller;
use App\Http\Controllers\Service_Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Carusel-related routes

Route::get('carousel_items',[Carousel_item_controller::class,'index']);
Route::prefix('admin/carousel_item')->group( function () {
    Route::post('/store',[Carousel_item_controller::class,'store']);
     Route::put('/{id}',[Carousel_item_controller::class,'update']);
     Route::delete('/{id}',[Carousel_item_controller::class,'destroy']);
     Route::get('/{id}',[Carousel_item_controller::class,'show']);

});

//Service-related routes

Route::get('services',[Service_Controller::class,'index']);
Route::prefix('admin/service_items')->group( function () {
    Route::post('/store',[Service_Controller::class,'store']);
     Route::put('/{id}',[Service_Controller::class,'update']);
     Route::delete('/{id}',[Service_Controller::class,'destroy']);
     Route::get('/{id}',[Service_Controller::class,'show']);

});

