<?php

use Illuminate\Database\Seeder;

class User_RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->insert([
            ['user_id' => 1, 'role_id' => 1, 'joined_at' => '2000-01-01'],
            ['user_id' => 2, 'role_id' => 2, 'joined_at' => '2000-01-01'],
            ['user_id' => 2, 'role_id' => 3, 'joined_at' => '2000-01-01'],
            ['user_id' => 3, 'role_id' => 3, 'joined_at' => '2000-01-01']
        ]);
    }
}
