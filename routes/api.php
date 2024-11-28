<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::post('curriculum-vitae', [UserController::class, 'curriculumVitae'])->middleware('api');
Route::post('biodata', [UserController::class, 'biodata'])->middleware('api');
Route::get('get-user', [UserController::class, 'getUserByGender'])->middleware('api');
Route::get('newest-user', [UserController::class, 'getNewUser'])->middleware('api');
Route::get('detail-user', [UserController::class, 'getDetailUser'])->middleware('api');
Route::post('user-verification', [UserController::class, 'userVerification'])->middleware('api');
Route::post('update-profile', [UserController::class, 'updateProfile'])->middleware('api');
Route::post('khitbah-submission', [UserController::class, 'khitbahSubmission'])->middleware('api');
Route::post('favorite', [UserController::class, 'userFavorite'])->middleware('api');
Route::get('unfavorite', [UserController::class, 'userUnFavorite'])->middleware('api');
Route::get('get-submission', [UserController::class, 'getSubmission'])->middleware('api');
Route::get('get-settings', [UserController::class, 'getSettings'])->middleware('api');
Route::post('delete-account', [UserController::class, 'deleteAccount'])->middleware('api');

