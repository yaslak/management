<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

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
        'first_name','last_name',
        'dtn','sex','address',
        'house_nbr','city','tel',
        'photo_profil_id','photo_cover_id',
        'recover_id','society_id','post_id'
    ];
    public $guarded = ['is_admin'];

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

    public function posts()
    {
        return $this->belongsToMany('App\Model\Society\Post');
    }

    public function liste()
    {
        return DB::table('users')
            ->leftJoin('societies', 'users.id', '=', 'societies.id')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->select('users.*', 'posts.*','societies.*')
            ->where('users.is_admin', null)
            ->get();
    }

    public static function UserDelete(int $id)
    {
        return DB::table('users')->where('id',$id)->delete();
    }

    public static function UserPostDelete(int $id)
    {
        return DB::table('posts')->where('user_id',$id)->delete();
    }

    public static function hasPost(int $id)
    {
        return DB::table('posts')->where('user_id',$id)->first();
    }
}
