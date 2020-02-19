<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VehicleController extends Controller
{
    //
    public function index()
    {
        $data = Vehicle::get();

        return response()->json([
            'data' => $data
        ]);
    }


}
