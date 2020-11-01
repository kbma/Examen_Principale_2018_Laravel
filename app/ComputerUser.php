<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerUser extends Model
{
    public $table="computer_user";
    public function computer(){
        return $this->belongsTo('App\Computer');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
