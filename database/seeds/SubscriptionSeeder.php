<?php

use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscriptions')->insert([
            'user_id' => 2,
            'start_at' =>  '2020-01-01', 
            'end_at' =>  '2020-02-02'
        ]);
    }
}
