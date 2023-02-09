<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->truncate();


        DB::table('tasks')->insert([
            'title' => 'Earnings (Monthly)',
            'income' => '$40,000',
            'color' => 'blue',
            'data_feather' => 'calendar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('tasks')->insert([
            'title' => 'Earnings (Annual)',
            'income' => '$215,000',
            'color' => 'orange',
            'data_feather' => 'dollar-sign',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tasks')->insert([
            'title' => 'Task Completion',
            'income' => '24',
            'color' => 'green',
            'data_feather' => 'check-square',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        DB::table('tasks')->insert([
            'title' => 'Pending Requests',
            'income' => '17',
            'color' => 'red',
            'data_feather' => 'message-circle',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);




    }
}
