<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view("dashboard.home");
    }
    
    public function no_permission_view(Request $req){
        return view("dashboard.nopermission");
    }
    
}
