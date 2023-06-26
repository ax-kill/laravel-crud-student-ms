<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

class LoginController
{
    public function login(){
        return view('admin.login');
    }
    public function doLogin(Request $request){
        $input=[
            'username'=>request('username'),
            'password'=>request('password'),

        ];
        $remember = $request->has('remember');

        if(auth()->guard('admin')->attempt($input,$remember)){

            return redirect()->route('admin.dashboard');

        }else{
            return "login failed";
        }

}
    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
    
}
