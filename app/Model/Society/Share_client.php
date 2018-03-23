<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Share_client extends Model
{
    public $fillable = [
        'share_client_society_id','share_client_created_at'
    ];

    public $timestamps = false;
}
