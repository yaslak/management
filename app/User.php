<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'photo_profil','photo_cover',
        'first_name','last_name',
        'dtn','sex','address',
        'house_nbr','city','tel',
        'slug','recover_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function recover()
    {
        return $this->belongsTo('App\Model\Recover\Recover');
    }
}
