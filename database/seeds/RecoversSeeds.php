<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecoversSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 1; $i < 28; $i++){
            DB::table('recovers')->insert([
            'email' => true,
            'token' => false,
            'question_secrete_id' => 1,
            'response' => '00:00'
        ]);
            DB::table('users')->where('id',$i)->update(['recover_id' => $i]);
        }
    }
}
