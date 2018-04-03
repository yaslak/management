<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public $fillable = [
        'agenda_title','agenda_text','agenda_from','agenda_to',
        'agenda_publisher_reader_id'
    ];

    public $timestamps = false;
}
