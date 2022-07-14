<?php

namespace App\Http\Controllers\Admin\auth;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ResponseTrait;

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

    public function profile()
    {
        return view('admin.auth.profile');
    }//end of profile function

    public function saveProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:admins,email,' . \auth('admin')->user()->id,
        ], [], [

            'name' => 'الإسم',
            'email' => 'البريد الإلكتروني'

        ]);
        if ($validator->fails()) {
            return $this->setError($validator->errors()->first());
        }

        $data = $validator->validated();
        $data['password'] = $request->password ? bcrypt($request->password) : \auth('admin')->user()->password;
        \auth('admin')->user()->update($data);
        return $this->setUpdatedSuccess();
    }//end of saveProfile function
}
