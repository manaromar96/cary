<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['modelYear','VIN','brand_id'];
    public function brand(){
        $this->belongsTo(CarBrand::class);
    }

}
