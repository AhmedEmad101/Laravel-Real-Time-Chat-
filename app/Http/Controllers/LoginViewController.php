<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\LoginController;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginViewController extends Controller
{
    protected $LoginController;
    public function __construct(LoginController $LoginController)
    {
        $this->LoginController = $LoginController;
    }
    public function redirectToView(LoginRequest $request)
    {

        $response = $this->LoginController->login($request);
        if($response != null)
        {
            $responseData = $response->getData(true);
            $request->session()->put('UserToken', $responseData['access_token']);
            return redirect('home');
        }
        return dd('wrong email or password');    }
}
