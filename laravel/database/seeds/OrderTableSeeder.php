<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [];
 		 for($i=0;$i < 100;$i++)
 		 {
 		 	$data[] = [

 		 		'ordernum' => rand(100000,999999),
 		 		'uid' => rand(1,100), 
 		 		'gid' => rand(1,100),
 		 		'total' => rand(1,100),
 		 		'ftime' => rand(1000000,9999999),
 		 		'otime' => rand(1000000,9999999),
 		 		'status'=>1,
 		 	];
 		 }
 		 \DB::table('order')->insert($data);
    }
}
