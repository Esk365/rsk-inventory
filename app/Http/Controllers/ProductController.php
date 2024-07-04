<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Supplier;
use App\Models\Category;

class ProductController extends Controller
{
    public function products_view(Request $req){
        $products = product::join('categories','categories.id','=','products.category_id')
        ->leftjoin('suppliers','suppliers.id','=','products.supplier_id')
        ->orderBy('products.id','desc')->get(['categories.name as cname','suppliers.name as sname','products.*']);
        return view('dashboard.user.products.home')->with('products',$products);
    }

    public function products_add_view(Request $req){
        $suppliers = Supplier::all();
        $categories = Category::all();
        return view('dashboard.user.products.add')->with('suppliers', $suppliers)->with('categories', $categories);
    }

    public function products_add(Request $req){

        if(Product::where('name',$req->name)->where('category_id',$req->category)->exists()){

        }else{
        $product = new product;
        $product->name = $req->name;
        $product->qty = $req->qty;
        $product->price = $req->price;
        $product->category_id = $req->category;
        $product->supplier_id = $req->supplier;
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
        $suppliers = Supplier::all();
        $categories = Category::all();
        return view('dashboard.user.products.edit')->with("product",$product)->with('suppliers', $suppliers)->with('categories', $categories);
    }

    public function products_edit(Request $req){
        $product = product::find($req->id);
        if($product){
            $product->update([
                'name' => $req->name,
                'qty' => $req->qty,
                'price' => $req->price,
                'category_id' => $req->category,
                'supplier_id' => $req->supplier,
            ]);
        }
        return redirect('/products');
    }
    
}