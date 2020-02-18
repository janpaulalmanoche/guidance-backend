<?php

namespace App\Http\Controllers;

use App\PlaceStayingInGensan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PlaceStayingInGensanController extends Controller
{
    //
    public function index(){
        $data = PlaceStayingInGensan::get();

        return response()->json([
            'data' => $data
        ]);

    }
}
