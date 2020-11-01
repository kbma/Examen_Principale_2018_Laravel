<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{

    public function departement(){
        return $this->belongsTo('App\Departement');
    }
    public function computer_user(){
        return $this->hasOne('App\ComputerUser');
    }

}
