<?php

namespace App;

use App\DishOrder;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function dishes() {
        return $this->belongsToMany('App\Dish')
        ->withPivot(['dish_id', 'order_id', 'created_at', 'updated_at'])
        ->withTimestamps()
        ->whereNull('dishes.deleted_at');
    }
}
