<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImages extends Model
{
    protected $fillable=['photo','car_id'];
  public function car(){
      return $this->belongsTo(Car::class);
  }
}
