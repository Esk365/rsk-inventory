<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function products_view(Request $req){
        $products = product::join('categories','categories.id','=','products.category_id')
        ->orderBy('products.id','desc')->get(['categories.name as cname','products.*']);
        return view('dashboard.user.products.home')->with('products',$products);;
    }

    public function products_add_view(Request $req){
        return view('dashboard.user.products.add');
    }

    public function products_add(Request $req){

        if(Product::where('name',$req->name)->where('category_id',$req->category)->exists()){

        }else{
        $product = new product;
        $product->name = $req->name;
        $product->qty = $req->qty;
        $product->price = $req->price;
        $product->category_id = $req->category;
        $product->save();
        }
         return redirect('/products');
    }

    public function products_delete(Request $req){
        $product = product::find($req->id);
        if($product){
            $product->delete();
        }   
        return redirect('/products');   
    }

    public function products_edit_view(Request $req){
        $product = product::find($req->id);
        return view('dashboard.user.products.edit')->with("product",$product);
    }

    public function products_edit(Request $req){
        $product = product::find($req->id);
        if($product){
            $product->update([
                'name' => $req->name,
                'qty' => $req->qty,
                'price' => $req->price,
                'category_id' => $req->category,
            ]);
        }
        return redirect('/products');
    }
    
}