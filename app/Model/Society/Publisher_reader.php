<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Publisher_reader extends Model
{
    public $fillable = [
        'publisher_readers_reader_id','publisher_readers_publisher_id',
        'publisher_readers_updated_at','publisher_readers_created_at'
    ];

    public $timestamps = false;
}
