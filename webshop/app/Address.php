<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function type(){
        return $this->belonsTo('Address_type');
    }
}
