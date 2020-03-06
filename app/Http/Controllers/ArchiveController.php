<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
class ArchiveController extends Controller
{
    //
    public function index(){

        $user = User::whereDate('created_at', '<=', Carbon::now()->subYears(5))->get()->where('archive',
            '=','false');
        return response()->json([
            'data' => $user
        ]);
    }

    public function deletee(){

        $user = User::whereDate('created_at', '<=', Carbon::now()->subYears(2))->get()->where('archive',
            '=','false');

        foreach($user as $u){
            $u->delete();
        }

        $user = User::whereDate('created_at', '<=', Carbon::now()->subYears(2))->get()->where('archive',
            '=','false');

        return response()->json([
            'data' => $user
        ]);
    }



}
