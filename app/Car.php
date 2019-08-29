<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function store(){
        $this->belongsTo(Store::class);
    }
    public function client(){
        $this->belongsTo(Client::class);
    }
    public function brands(){
        $this->belongsTo(CarBrand::class);
    }

}
