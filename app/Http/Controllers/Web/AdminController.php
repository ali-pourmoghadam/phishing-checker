<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminloginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function panel()
    {
        return view("admin.panel");
    }

    
    public function loginShow()
    {
        return view("admin.login");
  
    }

    public function login(AdminloginRequest $request)
    {
       
        $login = Auth::guard("admin")->attempt( $request->validated());

        if(! $login) return response()->json(["Data" =>  "username or password is incorrect!"] ,401);

        return response()->json(["Data" =>  "login successfully"] );
        
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
     
        return redirect('/adminlogin');
    }

}
