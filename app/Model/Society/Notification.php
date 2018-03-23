<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $fillable = [
        'notification_text','notification_read','notification_user_id','notification_img_id',
        'notification_updated_at','notification_created_at'
    ];

    public $timestamps = false;
}
