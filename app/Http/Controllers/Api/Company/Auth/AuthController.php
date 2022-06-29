<?php

namespace App\Http\Controllers\Api\Company\Auth;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
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
        $this->middleware('auth:api', ['except' => ['login']]);

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
        if (!$token = auth('api')->attempt($credentials)) {
            return $this->setStatus('Error')->setMessage('البيانات غير مطابقه')->setCode(401)->send();

        }
        if (auth('api')->user()->company->status != 'active') {
            Auth::guard('api')->logout();
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
        $company = new CompanyResource(\auth('api')->user());
        return $this->setStatus('success')->setCode(200)->setData($company)->send();
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();
        return $this->setStatus('success')->setMessage('تم تسجيل الخروج بنجاح')->setCode(200)->send();
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
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
        $company = new CompanyResource(auth('api')->user());
        return $this->setStatus('success')->setMessage('تم تسجيل الدخول بنجاح')->setCode(200)->setData(['token' => $token, 'data' => $company])->send();
    }
}