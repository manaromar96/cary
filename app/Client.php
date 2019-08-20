<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function cars(){
        $this->hasMany(Car  ::class);
    }
    public function installment(){
        $this->hasMany(Installment::class);
    }
}
