<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class omra_travelagency extends Authenticatable
{
    use Notifiable;
    protected $guard = 'travelagency';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        't_countryregistrationnumber','t_name','t_telephone','t_faxnumber','email','t_ownerpassportnumber','t_owneridphotopath','t_building','t_logophotopath','country_id','role_id','t_isactive','t_city'
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
