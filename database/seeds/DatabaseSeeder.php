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
        factory('App\User', 27)->create();
        $this->call(QuestionsSeeds::class);
        $this->call(RecoversSeeds::class);
        $this->call(UserSeeds::class);
        $this->call(ImagesSeeds::class);
        $this->call(SocietySeeds::class);
        $this->call(StoreSeeds::class);
        $this->call(SectionSeeds::class);
        $this->call(CategorySeeds::class);
        $this->call(ProductSeeds::class);
        $this->call(PivotDealSeeds::class);
        $this->call(OrderSeeds::class);
        factory('App\Model\Society\Society', 6)->create();
       // $this->call(SocietySeeds::class);
        //factory('App\Model\Recover\Recover', 26)->create();
        //
        //factory('App\Model\Society\Store',6)->create();
    }
}
