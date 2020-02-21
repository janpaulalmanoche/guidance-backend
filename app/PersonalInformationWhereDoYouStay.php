<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformationWhereDoYouStay extends Model
{
    //
    public function place(){
       return $this->belongsTo('App\PlaceStayingInGensan','place_staying_in_gensan_id','id');
}
}
