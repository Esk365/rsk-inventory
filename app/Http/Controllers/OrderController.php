<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\product;
use App\Models\Order;
use App\Models\Invoice;

class OrderController extends Controller
{
    public function orders_view(Request $req){
        $orders = Order::join('customers','customers.id','=','orders.customer_id')
        ->join('products','products.id','=','orders.product_id')
        ->orderBy('orders.id','desc')->get(['orders.*','customers.name as cname','products.name as pname']);
        return view('dashboard.user.orders.home')->with("orders",$orders);
    }

    public function orders_add_view(Request $req){
        $products = product::all();
        $customers = Customer::all();
        return view('dashboard.user.orders.add')->with('products',$products)->with('customers',$customers);
    }

    public function orders_add(Request $req){

        $product = product::find($req->product);

        if($product){

            $order = new Order;
            $order->status = "pending";
            $order->price = $product->price;
            $order->qty = $req->qty;
            $order->product_id = $req->product;
            $order->customer_id = $req->customer;
            $order->save();

            $order_id = $order->id;

            if($order_id){
                $product->update([
                    'qty' => $product->qty - $req->qty,
                ]);

                $invoice = new Invoice;
                $invoice->order_id = $order_id;
                $invoice->qty = $req->qty;
                $invoice->total = $req->qty *  $product->price;
                $invoice->product_id = $req->product;
                $invoice->customer_id = $req->customer;
                $invoice->save();

            }
            
        }
       
        return redirect('/orders');
    }

    public function orders_approve(Request $req){
        $order = Order::find($req->id);
        if($order){
            $order->update(['status'=> 'approved']);
        }
        return redirect('/orders');
    }
    
}
