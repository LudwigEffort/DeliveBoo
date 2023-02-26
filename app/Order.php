<?php

namespace App;

use App\Traits\AmountConvert;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use AmountConvert;

    public function dishes() {
        return $this->belongsToMany('App\Dish');
    }
}
