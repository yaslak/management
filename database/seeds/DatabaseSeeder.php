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
        /*
        $this->call(UserSeeds::class);
        */
        $this->call(QuestionsSeeds::class);
        $this->call(RecoversSeeds::class);
        factory('App\User', 25)->create();
        factory('App\Model\Society\Society', 50)->create();
    }
}
