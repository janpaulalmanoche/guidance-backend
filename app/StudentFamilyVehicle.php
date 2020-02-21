<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFamilyVehicle extends Model
{
    //
    public function vehicle(){
        return $this->belongsTo('App\Vehicle','vehicle_id','id');
    }
}
