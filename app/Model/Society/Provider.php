<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public $fillable = [
        'provider_society_id', 'provider_pivot_deal_id'
    ];

    public $timestamps = false;
}
