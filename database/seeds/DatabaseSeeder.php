<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            User_RoleSeeder::class,
            SubscriptionSeeder::class,
            PhotoSeeder::class,
            LikeSeeder::class,
            Unique_downloadSeeder::class,
            Photo_TagSeeder::class,
            CommentSeeder::class,
            PayoutSeeder::class
        ]
        );
    }
}
