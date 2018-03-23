<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Category_store extends Model
{
    public $fillable = [
        'category_store_name',
        'category_store_store_id','category_store_section_id','category_store_product_id',
        'category_store_updated_at','category_store_created_at'
    ];

    public $timestamps = false;
}
