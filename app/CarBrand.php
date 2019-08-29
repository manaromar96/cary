<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $fillable = [
        'name', 'logo',
    ];

    public function models(){
       return $this->hasMany(CarModel::class);
    }
    public function cars(){
       return $this->hasMany(Car::class);
    }
}
