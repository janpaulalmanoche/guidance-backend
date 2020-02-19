<?php

namespace App\Http\Controllers;

use App\Appliance;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApplianceController extends Controller
{
    //
    public function index(){
        $data = Appliance::get();

        return response()->json([
            'data' => $data
        ]);
    }
}
