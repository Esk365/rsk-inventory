<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories_view(Request $req){
        $categories = Category::orderBy('id','asc')->get();
        return view('dashboard.admin.categories.home')->with('categories',$categories);
    }

    public function categories_add_view(Request $req){
        return view('dashboard.admin.categories.add');
    }

    public function categories_add(Request $req){
        if(!Category::where("name",$req->name)->exists()){
            $category = new Category;
            $category->name = $req->name;
            $category->save(); 
        }
        return redirect('/categories');
    }

    public function categories_delete(Request $req){
        $category = Category::find($req->id);
        if($category){
            $category->delete();
        }
        return redirect('/categories');
    }

    public function categories_edit_view(Request $req){
        $category = Category::find($req->id);
        return view('dashboard.admin.categories.edit')->with("category",$category);
    }

    public function categories_edit(Request $req){      
        $category = Category::find($req->id);
        if($category){
            $category->update([
                'name' => $req->name
            ]);
        }    
        return redirect('/categories');
    }


}
