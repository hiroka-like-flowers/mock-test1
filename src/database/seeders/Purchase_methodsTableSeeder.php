<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Purchase_methodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            'コンビニ払い',
            'カード支払い',
        ];

        foreach ($contents as $content) {
            DB::table('purchase_methods')->insert([
                'content' => $content,
            ]);
        }
    }
}
