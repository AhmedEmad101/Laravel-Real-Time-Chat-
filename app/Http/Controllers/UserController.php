<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function GetAllUsers()
   {
    return User::all();
   }
   public function GetUser($id)
{
    return User::where('id',$id)->get();
}
public function CreateEmail(LoginRequest $request)
{
    $email = User::create($request->validated());
    return $email;
}
public function UpdateEmail($id,LoginRequest $request)
{
    $User = User::find($id);
    $User->update($request->all());
    return $User;
}
public function Profile($id)
{
   $User = User::findOrFail($id);
  return $User->Profile;
}
public function GetUserByToken($id)
{
    //$user = User::where('id', $id)->first();
    $user = Auth::guard('api')->user();
    return $user;

}

}
