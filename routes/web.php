<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/signout', function(){
    Auth::logout();
    return redirect('/');
});

Route::get('/',[RouteController::class,'welcome_view']);

Route::get('/signin',[RouteController::class,'signin_view'])->name('login');
Route::get('/signup',[RouteController::class,'signup_view'])->name('register');

Route::post('/signin',[UserController::class,'signin']);
Route::post('/signup',[UserController::class,'signup']);
Route::get('/nopermission',[RouteController::class , 'no_permission_view']);

Route::middleware(['auth_middleware'])->group(function (){
    Route::get('/dashboard',[RouteController::class , 'dashboard_view'])->name("dashboard");

    Route::middleware(['permission_middleware'])->group(function (){
        

    });

    Route::middleware(['user_middleware'])->group(function (){
        Route::prefix('products')->group(function () {
            Route::get('/',[ProductController::class , 'products_view']);
           
        });

    });

});




