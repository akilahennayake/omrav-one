<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class omra_hotel extends Authenticatable
{

    use Notifiable;
    protected $guard = 'hotel';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'h_hotelname', 'h_registerednumberincountry','h_telephone','email','h_distancetoharam','h_hotellogophotopath','h_faxnumber','role_id','h_isactive','city_id','starrating_id','nearestgate_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
