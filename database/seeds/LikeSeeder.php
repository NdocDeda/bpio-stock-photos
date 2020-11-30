<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            
            'is_like' => true, 
            'is_dislike' => false, 
            'user_id' => 1, 
            'photo_id' => 1
            
        ]);
    
    }
}
