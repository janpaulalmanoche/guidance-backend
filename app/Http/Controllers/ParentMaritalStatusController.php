<?php

namespace App\Http\Controllers;

use App\ParentMaritalStatus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ParentMaritalStatusController extends Controller
{
    //
    public function index(){
    $data =  ParentMaritalStatus::get();
        return response()->json([
            'data' => $data
        ]);
    }
}
