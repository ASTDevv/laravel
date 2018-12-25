<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 50; $i++) { 
    		DB::table('posts')->insert([
    			'title' => str_random(10),
    			'body' => str_random(450),
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'user_id'=>'1',
    			'cover_image' => ('noimage.jpg'),
    		]);
    	}
    }
}
