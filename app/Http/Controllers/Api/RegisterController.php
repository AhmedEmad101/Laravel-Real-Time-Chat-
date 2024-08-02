<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
public function CreateUser(LoginRequest $loginRequest)
{
$UserEmail = $loginRequest->email;
$UserPassword = $loginRequest->password;
$Password = Hash::make($UserPassword);
$User = User::create(['name'=>$loginRequest->name,
               'email'=>$UserEmail,
               'password'=>$Password
]);
return $User;
}
}
