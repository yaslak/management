<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(QuestionsSeeds::class);
        $this->call(RecoversSeeds::class);
        factory('App\Model\Recover\Recover', 26)->create();
        factory('App\User', 26)->create();
        factory('App\Model\Society\Society', 6)->create();
        //factory('App\Model\Society\Store',6)->create();
    }
}
