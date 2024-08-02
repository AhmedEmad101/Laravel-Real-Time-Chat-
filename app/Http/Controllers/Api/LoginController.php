<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{   public UserService $userservice;
    public function __construct(UserService $userService)
    {
        $this->userservice = $userService;
    }

    public function Login(LoginRequest $request)
    {
        $user = User::where('email',$request->email)->first();
        if(!$user||!Hash::check($request->password,$user->password))
        {
            return response()->json(['error'=>'Your login credentials are wrong'],422);
        }
        $device = substr($request->userAgent() ??'', 0,255);
        return response()->json(
            ['access_token'=>$user->createToken($device)->plainTextToken]
        );
    }
    public function Delete()
    {
        $this->authorize('UserDelete');
        return view('meetings');
    }
}
