<?php

namespace App\Http\Controllers;

use App\LiveAtPresent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LiveAtPresentController extends Controller
{
    //

    public function index(){

        return response()->json([
            'data' => LiveAtPresent::get()
        ]);
    }
}
