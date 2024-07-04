<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class AlertController extends Controller
{
    public function stockalerts_view(Request $req){
        $products = product::join('categories','categories.id','=','products.category_id')
        ->leftjoin('suppliers','suppliers.id','=','products.supplier_id')
        ->where('products.qty','<=',100)
        ->orderBy('products.id','desc')->get(['categories.name as cname','suppliers.name as sname','products.*']);
        return view('dashboard.alerts')->with('products',$products);
    }
    
}
