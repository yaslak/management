<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i < 54; $i++){
            if($i < 27){
                DB::table('images')->insert([
                        'image_name' => 'images/demo/users/face1.jpg'
                    ]);
            }else{
                DB::table('images')->insert([
                    'image_name' =>  'images/brands/youtube.png'
                ]);
            }
        }
        for($i = 1 ; $i < 23; $i++){
            $m = $i + 27;
            DB::table('users')->where('id',$i)->update([
                'photo_profil_id'=> $i,
                'photo_cover_id'=> $m,
            ]);
        }
    }
}
