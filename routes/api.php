<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\ProfileController;
use App\Services\Job;
/*use App\Services\Job;
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//middleware('auth:sanctum')
route::post('CreateUser',[App\Http\Controllers\Api\RegisterController::class,'CreateUser']);
Route::middleware('auth:sanctum')->group(function () {
Route::post('Login',[App\Http\Controllers\Api\LoginController::class,'Login']);
route::get('jobs',[JobsController::class,'AllJops']);
route::get('jobs/{id}',[JobsController::class,'GetJob']);
route::get('users',[UserController::class,'GetAllUsers']);
route::get('users/{id}',[UserController::class,'GetUser']);
route::post('CreateEmail',[UserController::class,'CreateEmail']);
route::post('UpdateEmail/{user}',[UserController::class,'UpdateEmail']);
route::post('hires',[HireController::class,'GetAllHires']);
route::post('SortSalaryAsc',[JobsController::class,'Sort']);
route::post('DH',[HireController::class,'DeleteAllHires']);
route::post('DH/{id}',[HireController::class,'DeleteHire']);
route::post('FHR/{id}',[HireController::class,'FindHirer']);
route::post('FHD/{id}',[HireController::class,'FindHired']);
route::post('UserProifle/{id}',[UserController::class,'Profile']);
route::get('GetEducation/{id}',[ProfileController::class,'GetEducation']);
route::get('fetch',[ProfileController::class,'FetchExternalApi']);
route::post('GetUserByToken/{token}',[UserController::class,'GetUserByToken']);
});
