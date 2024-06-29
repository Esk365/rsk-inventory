<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function suppliers_view(Request $req){
        $suppliers = Supplier::orderBy('id','asc')->get();       
         return view('dashboard.admin.suppliers.home')->with('suppliers',$suppliers);;
    }

    public function suppliers_add_view(Request $req){
        return view('dashboard.admin.suppliers.add');
    }

    public function suppliers_add(Request $req){
        if(Supplier::where('name',$req->name)->exists()){

        }else{
        $supplier = new Supplier;
        $supplier->name = $req->name;
        $supplier->mobile = $req->mobile;
        $supplier->save();
        }
         return redirect('/suppliers');
    }

    public function suppliers_delete(Request $req){
        $supplier = Supplier::find($req->id);
        if($supplier){
            $supplier->delete();
        }   
        return redirect('/suppliers');   
    }

    public function suppliers_edit_view(Request $req){
        $supplier = Supplier::find($req->id);
        return view('dashboard.admin.suppliers.edit')->with("supplier",$supplier);
    }

    public function suppliers_edit(Request $req){
        $supplier = Supplier::find($req->id);
        if($supplier){
            $supplier->update([
                'name' => $req->name,
                'mobile' => $req->mobile,
            ]);
        }
        return redirect('/suppliers');
    }
}
