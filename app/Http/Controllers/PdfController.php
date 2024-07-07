<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\product;
use PDF;

class PdfController extends Controller
{
    public function generatePdf(Request $req){
        $user = Auth::User();
        $orders = Order::join('customers','customers.id','=','orders.customer_id')
        ->join('products','products.id','=','orders.product_id')
        ->orderBy('orders.id','asc')->get(['orders.*','customers.name as cname','products.name as pname']);

        $data = [
            'name' => "Order Report",
            'date' => date('m/d/Y'),
            'orders' => $orders
        ];

        $pdf = PDF::loadview('pdf.orderreport',$data);

        return $pdf->download('orderreport.pdf');
    }

    public function generateInventoryPDF(Request $req){
        $products = product::join('categories','categories.id','=','products.category_id')
        ->leftjoin('suppliers','suppliers.id','=','products.supplier_id')
        ->orderBy('products.id','desc')->get(['categories.name as cname','suppliers.name as sname','products.*']);

        $data = [
            'name' => "Inventory Report",
            'date' => date('m/d/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadview('pdf.inventoryreport',$data);

        return $pdf->download('inventoryreport.pdf');

    }

}
