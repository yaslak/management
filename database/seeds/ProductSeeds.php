<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 7; $i++){
            DB::table('product_stores')->insert([
                'product_store_name' => 'category_name'.$i,
                'product_store_description' => 'product_store_description'.$i,
                'product_store_ref' => '123'.$i,
                'product_store_status' => true,
                'product_store_expired' => null,
                'product_store_expired_in' => null,
                'product_store_sale_prince' => '80',
                'product_store_buy_prince' => '100',
                'product_store_tva' => '20',
                'product_store_taxes' => '32',
                'product_store_qt' => '10',
                'product_store_store_id' => $i,
                'product_store_category_id' => $i,
                'product_store_section_id' => $i,
                'product_store_created_at' => \Carbon\Carbon::now(),
                'product_store_updated_at' => \Carbon\Carbon::now()
            ]);
            DB::table('category_stores')->where('id',$i)->update([
                'category_store_product_id' => $i
            ]);
        }
      }
}
