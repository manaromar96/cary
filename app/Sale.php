<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function details(){
        $this->hasOne(SaleDetail::class);
    }
    public function installment(){
        $this->hasOne(Installment::class);
    }
}
