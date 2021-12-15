<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Carousel_item_controller;
use App\Http\Controllers\Service_Controller;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/contact', function () {
//     return view('pages.contact-page');
// });
Auth::routes();

//WelcomePage Routs
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'service'])->name('pages.service-page');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('pages.about-page');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('pages.contact-page');
//contact us page

                                            //Carusel-related routes

                                            Route::get('carousel_items',[Carousel_item_controller::class,'index']);
                                            Route::prefix('admin/carousel_item')->group( function () {
                                            Route::post('/store',[Carousel_item_controller::class,'store']);
                                            Route::put('/{id}',[Carousel_item_controller::class,'update']);
                                            Route::delete('/{id}',[Carousel_item_controller::class,'destroy']);
                                            Route::get('/{id}',[Carousel_item_controller::class,'show']);

                                            });

Route::get('service_items',[Service_Controller::class,'index']);
Route::prefix('/admin/service_items')->group( function () {
Route::post('/store',[Service_Controller::class,'store']);
Route::put('/{id}',[Service_Controller::class,'update']);
Route::delete('/{id}',[Service_Controller::class,'destroy']);
Route::get('/{id}',[Service_Controller::class,'show']);

});
                                            //contactUs routes
                                            Route::get('contact_items',[ContactUsController::class,'index']);
                                            Route::prefix('/admin/contact')->group( function () {
                                            Route::post('/store',[ContactUsController::class,'store']);
                                            Route::put('/{id}',[ContactUsController::class,'update']);
                                            Route::delete('/{id}',[ContactUsController::class,'destroy']);
                                            Route::get('/{id}',[ContactUsController::class,'show']);

                                            });

//admin dashboard
Route::get('/admin', function () {
    return view('pages.admin');
});
