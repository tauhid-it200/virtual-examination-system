<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Admin;

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
//        $admin = new Admin;
//        $email = $admin->find($request->email);
//        if($email) {
//            if($email->password == $request->password) {
//                Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password], $request->remember);
//                return redirect("/dashboard");
//            }else {
//                return redirect()->back()->withException();
//            }
//        }else{
//            return redirect()->back()->withInput($request->only("email"));
//        }
        if (Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password], $request->remember)) {
            return redirect()->intended("/dashboard");
        }else{
            return redirect()->back()->with(["error" => "Invalid Email or Password!"]);
        }
    }

}
