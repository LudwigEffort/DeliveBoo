<?php

namespace App;

use App\DishOrder;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function dishes() {
        return $this->belongsToMany('App\Dish')
        ->withTimestamps()
        ->withTrashed();
    }
}
