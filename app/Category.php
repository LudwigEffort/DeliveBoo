<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Slugger;
    public $timestamps = false;

    public function users() {
        return $this->belongsToMany('App\User');
    }
}


