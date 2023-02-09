<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->truncate();

        $first_names = ['John', 'Jane', 'Bob', 'Sophie', 'Emily', 'Daniel','Jubayer'];

        DB::table('sales')->insert([
            'product_name' => 'chair',
            'type' => 'furniture',
            'no_of_items' => 1,
            'sold_to' => $first_names[array_rand($first_names)],
            'payment_type' => 'cash',
            'address' => '19/1 Canada',
            'status' => 'paid',
            'transaction_id' => '#'.random_int(100000, 999999),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('sales')->insert([
            'product_name' => 'table',
            'type' => 'furniture',
            'no_of_items' => 3,
            'sold_to' => $first_names[array_rand($first_names)],
            'payment_type' => 'online payment',
            'address' => '19/1 Uganda',
            'status' => 'paid',
            'transaction_id' => '#'.random_int(100000, 999999),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('sales')->insert([
            'product_name' => 'bat',
            'type' => 'sports',
            'no_of_items' => 3,
            'sold_to' => $first_names[array_rand($first_names)],
            'payment_type' => 'online payment',
            'address' => '19/1 Uganda',
            'status' => 'paid',
            'transaction_id' => '#'.random_int(100000, 999999),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
