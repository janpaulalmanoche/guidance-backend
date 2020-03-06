<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\UserUpdate;
use App\User;
class UserUpdateController extends Controller
{
    //

    public function index(){

        return response()->json([
           'data' => UserUpdate::get()
        ]);
    }

    public function store(Request $request){
            $user = User::where('id_no',$request->id_no)->first();
        $new = new UserUpdate;
        $new->first_name = $request->first_name;
        $new->middle_name = $request->middle_name;
        $new->last_name = $request->last_name;
        $new->user_id = $user->id;
//        $new->id_no = $request->id_no;
        $new->save();
        return response()->json([
            'data' => $request->all()
        ]);
    }

    public function approve($id){
         $find = UserUpdate::find($id);
         $user = User::where('id',$find->user_id)->first();
         $user->first_name = $find->first_name;
         $user->middle_name = $find->middle_name;
         $user->last_name = $find->last_name;
//         $user->id_no = $find->id_no;
         $user->update();

         $find->delete();

         return response('true');
    }



}
