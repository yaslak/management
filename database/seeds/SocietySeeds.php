<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class SocietySeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $i = 1;
    public function run()
    {
        for ($i=1; $i < 7; $i++){
            if($i == 1){
                $this->req(true,null,null,null,
                    null,null, $this->i, $i);
            }
            elseif ($i == 2){
                $this->req(true,null,null,null,
                    null,null, $this->i, $i);
                $this->req(null,true,null,null,
                    null,null, $this->i, $i);
            }
            elseif ($i == 3){
                $this->req(true,null,null,null,
                    null,null, $this->i, $i);
                $this->req(null,true,null,null,
                    null,null, $this->i, $i);
                $this->req(null,null,true,null,
                    null,null, $this->i, $i);
            }
            elseif ($i == 4){
                $this->req(true,null,null,null,
                    null,null, $this->i, $i);
                $this->req(null,true,null,null,
                    null,null, $this->i, $i);
                $this->req(null,null,true,null,
                    null,null, $this->i, $i);
                $this->req(null,null,null,true,
                    null,null, $this->i, $i);
            }
            elseif ($i == 5){
                $this->req(true,null,null,null,
                    null,null, $this->i, $i);
                $this->req(null,true,null,null,
                    null,null, $this->i, $i);
                $this->req(null,null,true,null,
                    null,null, $this->i, $i);
                $this->req(null,null,null,true,
                    null,null, $this->i, $i);
                $this->req(null,null,null,null,
                    true,null, $this->i, $i);
            }
            elseif ($i == 6){
                $this->req(true,null,null,null,
                    null,null, $this->i, $i);
                $this->req(null,true,null,null,
                    null,null, $this->i, $i);
                $this->req(null,null,true,null,
                    null,null, $this->i, $i);
                $this->req(null,null,null,true,
                    null,null, $this->i, $i);
                $this->req(null,null,null,null,
                    true,null, $this->i, $i);
                $this->req(null,null,null,null,
                    null,true, $this->i, $i);
            }
        }
    }

    private function req($pdg = null, $manager = null, $accounting = null,
                         $commercial = null, $delivery_man = null,
                         $storekeeper = null, $user_id, $society_id)
    {
        $this->i = $this->i + 1;
        DB::table('posts')->insert([
            'post_limit' => gmdate('Y-m-d',strtotime("+ 2 month")),
            'post_pdg' => $pdg,
            'post_manager'=>$manager,
            'post_accounting'=>$accounting,
            'post_commercial'=>$commercial,
            'post_delivery_man'=>$delivery_man,
            'post_storekeeper'=>$storekeeper,
            'post_user_id' => $user_id,
            'post_society_id' => $society_id,
            'post_updated_at'=>\Carbon\Carbon::now(),
            'post_created_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('users')->where('id',$user_id)->update(['society_id'=>$society_id,'post_id'=>$user_id]);
    }
}
