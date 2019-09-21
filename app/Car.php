<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable=['type','model','price','color','user_id','store_id'];
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
    public function user(){
        return $this->belongsTo(User::class);
    }
}
