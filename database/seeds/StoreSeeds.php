<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<7;$i++){
                DB::table('stores')->insert([
                    'store_society_id' => $i,
                    'store_created_at' => \Carbon\Carbon::now(),
                    'store_updated_at' => \Carbon\Carbon::now()
                ]);

        }
    }
}
