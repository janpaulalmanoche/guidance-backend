<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //

    public function index(){
        return response()->json([
            'role' => Role::get()
        ]);
    }
}
