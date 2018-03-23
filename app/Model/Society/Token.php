<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public $fillable = [
        'society_id','token','range','pdg','manager','accounting','commercial',
        'delivery_man','storekeeper','created_at','updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function society()
    {
        return $this->belongsTo('App\Model\Society\Society');
    }

    public static function addPdg($code,$id,$range)
    {
        return self::create([
            'society_id' => $id,
            'token' => $code,
            'range' => $range,
            'pdg' => 1
        ]);
    }
}
