<?php

namespace App\Model\Society;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Society extends Model
{
    /**
     * @var array
     */
    public $fillable = [
        'society_name','society_email','society_address','society_build',
        'society_tel','society_speaker','society_zip','society_city',
        'society_domain','society_licence','society_turnover',
        'society_limit','society_status','society_range',
        'society_logo_id','society_cover_id',
        'society_created_at','society_updated_at'
        ];

    public $timestamps = false;
/*

    public function posts()
    {
        return $this->hasMany('App\Model\Society\Post');
    }

    public static function allSocieties(array $select = null)
    {
        return (!is_null($select)) ? DB::table('societies')->select($select)->get()
                            : DB::table('societies')->get();
    }

    /**
     * @param $request
     * @param $logo
     * @return mixed
     */
/*
    public static function societyStore($request,$logo)
    {
        return self::create([
            'society_name' => $request->name,
            'society_email' => $request->email,
            'society_domain' => $request->domain,
            'society_licence' => $request->licence,
            'society_address' => $request->address,
            'society_build' => $request->build,
            'society_zip' => $request->zip,
            'society_city' => $request->city,
            'society_tel' => $request->tel,
            'society_speaker' => $request->speaker,
            'society_turnover' => $request->turnover,
            'society_limit' => $request->limit,
            'society_range' => $request->range,
            'society_status' => 1,
            'society_logo' => $logo,
            'society_created_at' => Carbon::now(),
            'society_updated_at' => Carbon::now(),
        ]);
    }

    public static function societyUpdate($request,$logo,$id)
    {
        self::where('id',$id)->update([
            'society_name' => $request->name,
            'society_email' => $request->email,
            'society_domain' => $request->domain,
            'society_licence' => $request->licence,
            'society_address' => $request->address,
            'society_build' => $request->build,
            'society_zip' => $request->zip,
            'society_city' => $request->city,
            'society_tel' => $request->tel,
            'society_speaker' => $request->speaker,
            'society_turnover' => $request->turnover,
            'society_limit' => $request->limit,
            'society_range' => $request->range,
            'society_status' => 1,
            'society_logo' => $logo,
            'society_created_at' => Carbon::now(),
            'society_updated_at' => Carbon::now(),
        ]);
    }

    public static function society(int $id)
    {
        return self::findOrFail($id);
    }
*/
}
