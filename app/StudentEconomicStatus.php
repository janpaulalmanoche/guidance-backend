<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEconomicStatus extends Model
{
    //
        public function economic(){
            return $this->belongsTo('App\SocioEconomicStatus','socio_economic_status_id','id');
        }
}

