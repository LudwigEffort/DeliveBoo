<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use Slugger;

    use SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function orders() {
        return $this->belongsToMany('App\Order')
        ->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
