<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use test\Mockery\HasUnknownClassAsTypeHintOnMethod;

class UserController extends Controller
{
    //

        public function login(Request $request){

             $user = User::where('email',$request->email);
             $count = $user->count();
             if($count >= 1){
                 return response()->json([
                     'user' => $user->get(),
                     'success' => true
                 ]);
             }else{
                 return response()->json([
                     'success' => false
                 ]);
             }

        }

        public function system_users(){

            return response()->json([
                'data' => User::with('type')->where('type_id','!=',1)->get()
            ]);
        }

        //students only
        public function index(){
            return response()->json([
                'data' => User::with('role','type','department')->where('role_id',2)
                    ->where('type_id','!=',3)->get()
            ]);
        }

        //search student
            public function search($user_name){
//            $count = User::where('last_name','=',$user_name)->count();
                $user = User::with('role','type','department')->where('last_name','like','%'.$user_name.'%')->get();

//            if($count >= 1){
//                return response()->json(false);
//            }

            return response()->json([
                'data' => $user
            ]);

            }

        public function store(Request $request){
            $new = User::insert([
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'id_no' => $request->id_no,
                'department_id' => $request->department_id,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
                'type_id' => $request->type_id,
            ]);
            return response()->json([
                'success' => 'Student has been successfully saved'
            ]);
        }



}
