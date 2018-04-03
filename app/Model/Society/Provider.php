<?php

namespace App\Model\Society;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Provider extends Model
{
    public $fillable = [
        'provider_society_id', 'provider_pivot_deal_id',
        'provider_client_id',
        'provider_updated_at','provider_created_at'
    ];

    public $timestamps = false;

    /**
     * list des providers partager
     * @return mixed
     */
    public static function listClient()
    {
        return DB::table('providers')
            ->join('societies as client', 'client.id', '=', 'providers.provider_client_id')
            ->select('client.*')
            ->get();
    }

    /**
     * list des providers priver
     * @return mixed
     */
    public static function listPivotDeals()
    {
        return DB::table('providers')
            ->leftJoin('societies', 'societies.id', '=', 'providers.provider_society_id')
            ->leftJoin('pivot_deals', 'pivot_deals.id', '=', 'providers.provider_pivot_deal_id')
            ->select('societies.*','pivot_deals.*')
            ->get();
    }
}
