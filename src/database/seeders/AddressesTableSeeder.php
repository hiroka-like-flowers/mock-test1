<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            [
                'user_id' => '1',
                'address' => '沖縄県石垣市石垣町1-1-1',
                'postcode' => '907-0023',
                'building' => '石垣荘101',
            ],
            [
                'user_id' => '2',
                'address' => '香川県さぬき市小田2-2-2',
                'postcode' => '769-2301',
                'building' => 'うどん小屋201',
            ],
        ]);
    }
}
