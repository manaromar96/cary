<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $fillable = ['name', 'address','carsNumber','user_id'];
    protected $guarded = ['_method'];

    public function cars(){
       return $this->hasMany(Car::class);
    }
    public function installments(){
       return $this->hasMany(Installment::class);
    }

    public function images(){
        return $this->hasMany(ImageStore::class);
    }
    public  function user(){
        return $this->belongsTo(User::class );
    }
    public function sales(){
        return $this->hasMany(Sale::class);
    }
}
