<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            ['id' => 1, 'email' => 'admin@qmail.com', 'first_name' => 'John', 'last_name' => 'Smith', 'password' => Hash::make('passwd')],
            ['id' => 2, 'email' => 'customer@qmail.com', 'first_name' => 'Jane', 'last_name' => 'Smith', 'password' => Hash::make('passwd')],
            ['id' => 3, 'email' => 'artist@qmail.com', 'first_name' => 'Ivan', 'last_name' => 'Kovač', 'password' => Hash::make('passwd')]

        ]);
        
            
    }
}
