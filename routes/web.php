<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;


Route::get('/signout', function(){
    Auth::logout();
    return redirect('/');
});

Route::get('/',[RouteController::class,'welcome_view']);

Route::get('/signin',[RouteController::class,'signin_view'])->name('login');
Route::get('/signup',[RouteController::class,'signup_view'])->name('register');

Route::post('/signin',[UserController::class,'signin']);
Route::post('/signup',[UserController::class,'signup']);

Route::get('/user',[RouteController::class,'user_view'])->name('user');


Route::get('/admin',[RouteController::class,'admin_view'])->name('admin');

