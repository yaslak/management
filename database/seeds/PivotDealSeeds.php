<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PivotDealSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 7; $i++){
            DB::table('clients')->insert([
                'client_society_id' => $i,
                'client_pivot_deal_id' => $i,
                'client_updated_at' => \Carbon\Carbon::now(),
                'client_created_at' => \Carbon\Carbon::now()
            ]);
            DB::table('providers')->insert([
                'provider_society_id' => $i,
                'provider_pivot_deal_id' => $i,
                'client_updated_at' => \Carbon\Carbon::now(),
                'client_created_at' => \Carbon\Carbon::now()
            ]);
            DB::table('pivot_deals')->insert([
                'pivot_deal_name' => 'pivot_deal_name',
                'pivot_deal_email' => 'pivot_deal_email',
                'pivot_deal_tel' => 'pivot_deal_tel',
                'pivot_deal_speaker' => 'pivot_deal_speaker',
                'pivot_deal_address' => 'pivot_deal_address',
                'pivot_deal_build' => 'pivot_deal_build',
                'pivot_deal_city' => 'pivot_deal_city',
                'pivot_deal_domain' => 'pivot_deal_domain'
            ]);
        }
    }
}
