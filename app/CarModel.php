<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public function brand(){
        $this->belongsTo(CarBrand::class);
    }
}
