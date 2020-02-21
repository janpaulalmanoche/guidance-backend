<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentParentStatus extends Model
{
    //
    public function marital_status(){
        return $this->belongsTo('App\ParentMaritalStatus','parent_marital_statuse_id','id');
    }
}
