<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Product_store extends Model
{
    public $fillable = [
        'product_store_name','product_store_description','product_store_ref',
        'product_store_status','product_store_expired','product_store_expired_in',
        'product_store_sale_price','product_store_buy_price','product_store_tva',
        'product_store_taxes','product_store_qt',
        'product_store_store_id','product_store_category_id','product_store_section_id',
        'product_store_updated_at','product_store_created_at',
    ];

    public $timestamps = false;
}
