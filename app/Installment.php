<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    public function client(){
        $this->belongsTo(Client::class);
    }
    public function sale(){
        $this->belongsTo(Sale::class);
    }
    public function store(){
        $this->belongsTo(Store::class);
    }
}
