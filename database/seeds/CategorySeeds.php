<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 7; $i++){
            DB::table('category_stores')->insert([
                'category_store_name' => 'category_name'.$i,
                'category_store_store_id' => $i,
                'category_store_section_id' => $i,
                'category_store_created_at' => \Carbon\Carbon::now(),
                'category_store_updated_at' => \Carbon\Carbon::now()
            ]);
            DB::table('section_stores')->where('id',$i)->update([
                'section_store_category_id' => $i
            ]);
        }
    }
}
