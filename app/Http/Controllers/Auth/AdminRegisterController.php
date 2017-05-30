<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Auth;

class AdminRegisterController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');
    }
    
    public function  showAdminRegistrationForm() {
        
        return view("auth.adminRegister");
    }


    public function adminRegister(Request $request) {
        $this->validate($request, [
            "name" => "required|max:255",
            "email" => "required|email|max:255|unique:admins",
            "password" => "required|min:6|confirmed"
        ]);
        
//        Admin::create([
//            "name" => $request->name,
//            "email" => $request->name,
//            "password" => bcrypt($request->name)
//        ]);
        
        $admin = new Admin;
        
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        
        $admin->save();
        
        if (Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password], $request->remember)) {
            return redirect()->intended("/dashboard");
        }else{
            return redirect("/admin-register",["message" => "Admin couid not be logged in!"]);
        }
        
        
    }
}
