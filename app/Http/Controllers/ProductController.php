<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products_view(Request $req){
        return view('dashboard.user.products.home');
    }

    
}

