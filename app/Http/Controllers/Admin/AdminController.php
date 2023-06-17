<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function adminLoginFrom()
    {
        return view('backend.admin.auth.login');
    }

    public function adminLogin(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();
       if(!$admin){
        return redirect()->back()->with('error', 'Email or password not matched.');
       }else{
        return redirect('/admin/dashboard');
       }   
    }
    
    public function adminDashboard()
    {
        return view('backend.admin.home.index');
    }
    
    public function adminLogout()
    {
         session()->flush();
        return  redirect ('/');
    }
}
