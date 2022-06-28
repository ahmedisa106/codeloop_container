<?php

namespace App\Http\Controllers\Api\Employee\Auth;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ApiResponse;

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:employee_api', ['except' => ['login']]);
    }


    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required'
        ], [], [
            'phone' => 'الهاتف',
            'password' => 'كلمه المرور',
        ]);
        if ($validator->fails()) {
            return $this->setStatus('Error')->setMessage($validator->errors()->first())->setCode(401)->send();
        }
        $credentials = request(['phone', 'password']);
        if (!$token = auth('employee_api')->attempt($credentials)) {
            return $this->setStatus('Error')->setMessage('البيانات غير مطابقه')->setCode(401)->send();

        }

        if (auth('employee_api')->user()->company->status != 'active') {
            Auth::guard('employee_api')->logout();
            return $this->setStatus('Error')->setMessage('برجاء التواصل مع الإداره لتفعيل الحساب ')->setCode(401)->send();
        } else {

            return $this->respondWithToken($token);
        }

    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth('employee_api')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('employee_api')->logout();
        return $this->setStatus('success')->setMessage('تم تسجيل الخروج بنجاح')->setCode(200)->send();
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('employee_api')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $company = new EmployeeResource(auth('employee_api')->user());
        return $this->setStatus('success')->setMessage('تم تسجيل الدخول بنجاح')->setCode(200)->setData(['token' => $token, 'data' => $company])->send();
    }
}
