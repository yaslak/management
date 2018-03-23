<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $fillable = [
        'client_society_id', 'client_pivot_deal_id'
    ];

    public $timestamps = false;
}
