<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {

        return view('admin.auth.login');

    }//end of login function

    public function login(Request $request)
    {

        $credentials = $request->except('_token');
        if (auth('admin')->attempt($credentials)) {
            session()->flash('success', 'تم تسجيل الدخول بنجاح');
            return redirect('/admin');
        } else {
            return redirect()->back()->with('error', 'بيانات غير صحيحه !');
        }


    }//end of login function

    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->flash('success', 'تم تسجيل الخروج بنجاح');
        return redirect('admin/login');


    }//end of logout function

    public function profile(){
        return view('admin.auth.profile');

    }//end of profile function
}
