<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customers_view(Request $req){
        $customers = Customer::orderBy('id','asc')->get();       
         return view('dashboard.user.customers.home')->with('customers',$customers);;
    }

    public function customers_add_view(Request $req){
        return view('dashboard.user.customers.add');
    }

    public function customers_add(Request $req){
        if(Customer::where('name',$req->name)->exists()){

        }else{
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->mobile = $req->number;
        $customer->save();
        }
         return redirect('/customers');
    }

    public function customers_delete(Request $req){
        $customer = Customer::find($req->id);
        if($customer){
            $customer->delete();
        }   
        return redirect('/customers');   
    }

    public function customers_edit_view(Request $req){
        $customer = Customer::find($req->id);
        return view('dashboard.user.customers.edit')->with("customer",$customer);
    }

    public function customers_edit(Request $req){
        $customer = Customer::find($req->id);
        if($customer){
            $customer->update([
                'name' => $req->name,
                'mobile' => $req->number,
            ]);
        }
        return redirect('/customers');
    }

}
