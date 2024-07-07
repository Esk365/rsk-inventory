<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Supplier;

class RouteController extends Controller
{
    public function welcome_view(Request $req){
        return view("welcome");
    }
    public function signin_view(Request $req){
            return view("auth.signin");
        }
    
    public function signup_view(Request $req){
            return view("auth.signup");
        }
    
    public function dashboard_view(Request $req){
        $productCount = product::count();
        $CustomerCount = Customer::count();
        $OrderCount = Order::count();
        $OrderApprovedCount = Order::where('status','approved')->count();
        $OrderPendingCount = Order::where('status','pending')->count();

        $products = product::join('categories','categories.id','=','products.category_id')
        ->leftjoin('suppliers','suppliers.id','=','products.supplier_id')
        ->where('products.qty','<=',100)
        ->orderBy('products.id','desc')->get(['categories.name as cname','suppliers.name as sname','products.*']);

        $supplierCount = Supplier::count();
        $categoryCount = Category::count();

        return view("dashboard.home")->with("productCount",$productCount)
        ->with("CustomerCount",$CustomerCount)
        ->with("OrderCount",$OrderCount)
        ->with("OrderApprovedCount",$OrderApprovedCount)
        ->with("OrderPendingCount",$OrderPendingCount)
        ->with('alertCounts',count($products))
        ->with("supplierCount",$supplierCount)
        ->with("categoryCount",$categoryCount)
        ;
    }
    
    public function no_permission_view(Request $req){
        return view("dashboard.nopermission");
    }
    
}
