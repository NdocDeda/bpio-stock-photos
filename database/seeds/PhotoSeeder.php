<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'id' => 1, 
            'name' => 'Priroda', 
            'server_path' => 'priroda.jpg', 
            'v_resolution' => 1920 , 
            'h_resolution' => 1080, 
            'user_id' => 3
        ]);
    }
}
