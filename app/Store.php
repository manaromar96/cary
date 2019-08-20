<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function cars(){
        $this->hasMany(Car::class);
    }
    public function installments(){
        $this->hasMany(Installment::class);
    }
}
