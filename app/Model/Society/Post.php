<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = [
        "user_id",'society_id','post_limit',
        'post_pdg','post_manager','post_accounting',
        'post_commercial','post_delivery_man','post_storekeeper',
        'post_created_at','post_updated_at'
    ];

    public function society()
    {
        return $this->belongsTo('App\Model\Society\Society');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
