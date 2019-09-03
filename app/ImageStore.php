<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageStore extends Model
{
    protected $fillable=['path','store_id'];
    public function store(){
        return $this->belongsTo(Store::class);
    }
}
