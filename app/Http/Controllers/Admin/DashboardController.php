<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

class DashboardController
{
    public function dashboard(){
        if (auth()->guard('admin')->check()) {
            $admin = auth()->guard('admin')->user();

            return view('admin.dashboard', compact('admin'));
        }else{
            return redirect()->route('login');
        }

    }
}
