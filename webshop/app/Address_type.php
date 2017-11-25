<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address_type extends Model
{
    public function addresses(){
        return $this->hasMany('App\Address');
    }
}
