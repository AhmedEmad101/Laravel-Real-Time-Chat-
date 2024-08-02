<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\LoginViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PusherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('login','login');
Route::post('login', function () {
    return view('login');
});
Route::view('home','index')->name('home');

Route::get('meetings', [LoginController::class, 'Delete']);
Route::post('Check', [LoginController::class, 'Login']);
Route::post('Auth', [LoginViewController::class, 'RedirectToView']);
//////////////////////////////////////////////
Route::get('/', [PusherController::class, 'index']);
Route::post('broadcast', [PusherController::class, 'broadcast']);
Route::post('receive', [PusherController::class, 'receive']);
