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
Route::get('search/{user_name}','UserController@search');

Route::resource('department','DepartmentController');
Route::resource('type','TypeController');
Route::resource('role','RoleController');
Route::resource('place-stayin-on-gensan','PlaceStayingInGensanController');

Route::resource('parents-marital-status','ParentMaritalStatusController');
Route::resource('live-at-present','LiveAtPresentController');

Route::resource('socio-economic-status','SocioEconomicStatusController');

Route::resource('vehicle','VehicleController');

Route::resource('appliance','ApplianceController');


Route::post('store','RecordController@store');
Route::get('record/{student_id}','RecordController@student_record');
Route::get('archive','ArchiveController@index');
Route::get('delete-old-record','ArchiveController@deletee');
Route::post('req-update','UserUpdateController@store');
Route::get('req-update-index','UserUpdateController@index');
Route::get('req-update-approve/{userupdateid}','UserUpdateController@approve');


