<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            
            'comment' => 'Ova slika je bas super', 
            'user_id' => 1, 
            'photo_id' => 1
            
            
        ]);
    
    }
}
