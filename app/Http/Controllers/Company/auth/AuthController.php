<?php

namespace App\Http\Controllers\Company\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('company.auth.login');
    }//end of loginForm function

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric',
            'password' => 'required'
        ], [], [
            'phone' => 'الهاتف',
            'password' => 'كلمه المرور'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $data = $validator->validated();


        if (auth()->guard($request->type)->attempt(['phone' => $data['phone'], 'password' => $data['password']])) {
            session()->flash('success', 'تم تسجيل الدخول  بنجاح');
            return redirect()->route('company.home');
        } else {
            return redirect()->back()->with('error', 'بيانات غير صحيحه');
        }
    }//end of login function

    public function logout()
    {
        Auth::guard('company')->logout();
        session()->flash('success', 'تم تسجيل الخروج بنجاح');
        return redirect('company/login');

    }//end of logout function
}
