<?php

use Illuminate\Database\Seeder;

class Unique_downloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unique_downloads')->insert([
            'id' => 1,
            'photo_id' => 1,
            'user_id' => 3,
            'downloaded_at' => '2020-10-15'
            

        ]);
    }
}
