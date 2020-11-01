<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Departement extends Model
{

    public function computers(){
        return $this->hasMany('App\Computer');
    }

}
