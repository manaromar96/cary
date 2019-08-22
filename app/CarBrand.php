<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $fillable = [
        'name', 'logo',
    ];

    public function models(){
        $this->hasMany(CarModel::class);
    }
    public function cars(){
        $this->hasMany(Car::class);
    }
}
