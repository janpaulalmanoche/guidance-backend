<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/haha',function (){
    return response()->json([
        \App\User::witn('type')->get()
    ]);
});




Route::post('login','UserController@login');
Route::get('/system-users','UserController@system_users');
Route::resource('user','UserController');
Route::resource('department','DepartmentController');
Route::resource('type','TypeController');
Route::resource('role','RoleController');

