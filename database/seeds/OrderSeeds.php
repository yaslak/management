<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <7 ; $i++){
            DB::table('orders')->insert([
                'order_prince' => '100',
                'order_qt' => '10',
                'order_reduction' => '1',
                'order_discount' => '10',
                'order_bonus' => '1',
                'order_tva' => '20',
                'order_taxes' => '32',
                'order_product_id' => $i,
                'order_sale_id' => $i,
            ]);
            DB::table('orders')->insert([
                'order_prince' => '80',
                'order_qt' => '10',
                'order_reduction' => '1',
                'order_discount' => '10',
                'order_bonus' => '1',
                'order_tva' => '20',
                'order_taxes' => '32',
                'order_product_id' => $i+6,
                'order_buy_id' => $i
            ]);
            DB::table('buys')->insert([
                'buy_delivery' => '100',
                'buy_total_ht' => '800',
                'buy_total_ttc' => '960',
                'buy_tva_total' => '160',
                'buy_taxes_total' => '0',
                'buy_prince_total' => '1060',
                'buy_provider_id' => $i,
                'buy_order_id' => $i+6,
                'buy_created_at' => \Carbon\Carbon::now(),
            ]);
            DB::table('sales')->insert([
                'sale_delivery' => '100',
                'sale_total_ht' => '1000',
                'sale_total_ttc' => '1200',
                'sale_tva_total' => '200',
                'sale_taxes_total' => '32',
                'sale_prince_total' => '1300',
                'sale_client_id' => $i,
                'sale_order_id' => $i,
                'sale_created_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
