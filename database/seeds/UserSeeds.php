<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'name123',
            'email' => 'email@email.email',
            'password' => bcrypt('000000'),
            'recover_id' => 1,
            'first_name' => 'yasser',
            'last_name' => 'lakhsadi',
            'dtn' => \Carbon\Carbon::createFromDate(1987,07,20),
            'sex' => 'Homme',
            'address' => 'BD mohamed 6 jamila I',
            'house_nbr' => '1443',
            'city' => 'casablanca',
            'tel' => '0683574565',
            'slug' => 'yasser-lakhsadi-65',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
