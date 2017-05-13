<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller {

    public function __construct() {
        $this->middleware("guest:admin");
    }

    public function showAdminLoginForm() {
        return view("auth.adminLogin");
    }

    public function adminLogin(Request $request) {
        
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required|min:6"
        ]);
        
        if (Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password], $request->remember)) {
            return redirect("/admin");
        }else{
            return redirect()->back()->withInput($request->only("email"));
        }
    }

}
