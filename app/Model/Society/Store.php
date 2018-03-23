<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $fillable = [
        'store_society_id','store_section_store_id','store_category_store_id',
        'store_product_id',
        'store_updated_at','store_created_at'
    ];

    public $timestamps = false;
}
