<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $fillable = [
        'sale_delivery','sale_total_ht','sale_total_ttc','sale_delivery',
        'sale_provider_id','sale_order_id',
        'sale_created_at'
    ];

    public $timestamps = false;
}
