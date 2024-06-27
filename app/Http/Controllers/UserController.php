<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->password = ($req->password);
        $user->save();

        return redirect('/signin');
    }

    public function signin(Request $req){
        $userdata = array(
            'email'     => $req->email,
            'password'  => $req->password
        );
        if (Auth::attempt($userdata)) {
            if(Auth::User()->role == 'user'){
                return redirect("/user");
            }else{
                return redirect("/admin");
            }
        } else {        
            return redirect()->back();
        }
    }
}
