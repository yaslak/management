<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    public $fillable = [
        'buy_delivery','buy_total_ht','buy_total_ttc','buy_delivery',
        'buy_client_id','buy_order_id',
        'buy_created_at'
    ];

    public $timestamps = false;
}
