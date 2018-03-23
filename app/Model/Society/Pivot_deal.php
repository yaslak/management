<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Pivot_deal extends Model
{

    public $fillable = [
        'pivot_deal_name','pivot_deal_email','pivot_deal_tel',
        'pivot_deal_speaker','pivot_deal_address','pivot_deal_build',
        'pivot_deal_city','pivot_deal_domain'
    ];

    public $timestamps = false;
}
