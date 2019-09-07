<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable=['type','model','price','color'];
    public function store(){
        return $this->belongsTo(Store::class);
    }
    public function client(){
     return   $this->belongsTo(Client::class);
    }
    public function brands(){
      return  $this->belongsTo(CarBrand::class);
    }
    public function carImages(){
        return  $this->hasMany(CarImages::class);
    }
}
