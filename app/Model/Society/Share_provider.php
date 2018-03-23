<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Share_provider extends Model
{
    public $fillable = [
        'share_provider_society_id','share_provider_created_at'
    ];

    public $timestamps = false;
}
