<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Slugger;

    public function dishes() {
        return $this->hasMany('App\Dish');
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'vat_number', 'email', 'password' , 'uploaded_img' // Sono sulla CRUD? (test di git)
    ];

    protected $attributes = [
        'opening_time' => null,
        'closing_time' => null,
        'is_opened' => 0,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
