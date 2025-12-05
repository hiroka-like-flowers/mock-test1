<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'sell_id' => '1',
                'buyer_id' => '2',
                'exhibition_id' => '2',
                'purchase_method_id' => '1',
                'address_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sell_id' => '2',
                'buyer_id' => '1',
                'exhibition_id' => '4',
                'purchase_method_id' => '1',
                'address_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
