<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 7; $i++){
            DB::table('section_stores')->insert([
                'section_store_name' => 'store_name'.$i,
                'section_store_store_id' => $i,
                'section_store_created_at' => \Carbon\Carbon::now(),
                'section_store_updated_at' => \Carbon\Carbon::now()
            ]);
            DB::table('stores')->where('id',$i)->update([
                'store_section_store_id' => $i
            ]);
        }
    }
}
