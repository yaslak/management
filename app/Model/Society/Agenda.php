<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public $fillable = [
        'agenda_title','agenda_text','agenda_from','agenda_to',
        'agenda_user_id','agenda_society_id',
        'agenda_updated_at','agenda_created_at'
    ];

    public $timestamps = false;
}
