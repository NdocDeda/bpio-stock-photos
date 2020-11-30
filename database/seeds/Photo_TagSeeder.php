<?php

use Illuminate\Database\Seeder;

class Photo_TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photo_tag')->insert([
            ['photo_id' => 1, 'tag_id' => 2] ,
            ['photo_id' => 1, 'tag_id' => 3]

        ]);
    }
}
