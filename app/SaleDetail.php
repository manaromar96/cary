<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    public function sale(){
        $this->belongsTo(Sale::class);
    }
}
