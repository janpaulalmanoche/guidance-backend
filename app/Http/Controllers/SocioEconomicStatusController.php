<?php

namespace App\Http\Controllers;

use App\SocioEconomicStatus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SocioEconomicStatusController extends Controller
{
    //

    public function index(){
        $data = SocioEconomicStatus::get();

        return response()->json([
            'data' => $data
        ]);
    }
}
