<?php

use Illuminate\Database\Seeder;

class PayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payouts')->insert([
            
            'start_at' => '2020-01-01', 
            'end_at' => '2020-12-31', 
            'total' => 100.38,
            'user_id' => 3
        ]);
    }
}
