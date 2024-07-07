<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\PdfController;


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
        Route::prefix('categories')->group(function () {
            Route::get('/',[CategoryController::class , 'categories_view']);
            Route::get('/add',[CategoryController::class , 'categories_add_view']);
            Route::get('/edit/{id}',[CategoryController::class , 'categories_edit_view']);

            Route::post('/add',[CategoryController::class , 'categories_add']);
            Route::get('/delete/{id}',[CategoryController::class , 'categories_delete']);
            Route::post('/edit/{id}',[CategoryController::class , 'categories_edit']);
        });

        Route::prefix('suppliers')->group(function (){
            Route::get('/',[SupplierController::class , 'suppliers_view']);
            Route::get('/add',[SupplierController::class , 'suppliers_add_view']);
            Route::get('/edit/{id}',[SupplierController::class , 'suppliers_edit_view']);

            Route::post('/add',[SupplierController::class , 'suppliers_add']);
            Route::get('/delete/{id}',[SupplierController::class , 'suppliers_delete']);
            Route::post('/edit/{id}',[SupplierController::class , 'suppliers_edit']);
        });

        Route::get('/orders/approve/{id}',[OrderController::class , 'orders_approve']);  
        Route::get('/generateInventoryPDF',[PDFController::class , 'generateInventoryPDF']);
    });



 Route::middleware(['user_middleware'])->group(function (){
        Route::prefix('products')->group(function () {
            Route::get('/',[ProductController::class , 'products_view']);
            Route::get('/add',[ProductController::class , 'products_add_view']);
            Route::get('/edit/{id}',[ProductController::class , 'products_edit_view']);

            Route::post('/add',[ProductController::class , 'products_add']);
            Route::get('/delete/{id}',[ProductController::class , 'products_delete']);
            Route::post('/edit/{id}',[ProductController::class , 'products_edit']);
        });

        Route::prefix('customers')->group(function (){
            Route::get('/',[CustomerController::class , 'customers_view']);
            Route::get('/add',[CustomerController::class , 'customers_add_view']);
            Route::get('/edit/{id}',[CustomerController::class , 'customers_edit_view']);

            Route::post('/add',[CustomerController::class , 'customers_add']);
            Route::get('/delete/{id}',[CustomerController::class , 'customers_delete']);
            Route::post('/edit/{id}',[CustomerController::class , 'customers_edit']);
        });

         
    });

        Route::prefix('orders')->group(function (){
            Route::get('/',[OrderController::class , 'orders_view']);
            Route::get('/add',[OrderController::class , 'orders_add_view']);     
            Route::post('/add',[OrderController::class , 'orders_add']);

            
    });  


    Route::get('/stockalerts',[AlertController::class , 'stockalerts_view']);  

    Route::get('/generatePdf',[PdfController::class , 'generatePdf']); 

});




