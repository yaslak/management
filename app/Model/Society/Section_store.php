<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Section_store extends Model
{
    public $fillable = [
        'section_store_name',
        'section_store_store_id','section_store_category_id','section_store_product_id',
        'section_store_updated_at','section_store_created_at'
    ];

    public $timestamps = false;


}
