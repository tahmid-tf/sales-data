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
         $this->call(UserSeeder::class);
         $this->call(EarnSeeder::class);
         $this->call(RevenueSeeder::class);
         $this->call(TaskSeeder::class);
    }
}
