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
    

    public function user_view(Request $req){
            return view("user.home");
        }

        public function admin_view(Request $req){
            return view("admin.home");
        }
    
}
