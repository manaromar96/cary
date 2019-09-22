<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable=['user_id','store_id','car_id'];
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function store(){
        return $this->belongsTo(Store::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
