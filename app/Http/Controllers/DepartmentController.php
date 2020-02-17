<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DepartmentController extends Controller
{
    //
    public function index(){

        return response()->json([
           'data' => Department::get()
        ]);
    }

    public function store(Request $request){

        $new = Department::insert([
           'department' => $request->department,
           'a' => $request->a
        ]);

        return response()->json([
            'success' => 'successfully saved'
        ]);
    }







}
