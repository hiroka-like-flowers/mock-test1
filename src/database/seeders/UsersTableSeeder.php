<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '山田太郎',
                'email' => 'taro@example.com',
                'password' => Hash::make('taro1234'),
                'picture' => 'storage/peach.png',
            ],
            [
                'name' => '山田花子',
                'email' => 'hanako@example.com',
                'password' => Hash::make('hanako1234'),
                'picture' => 'storage/pineapple.png',
            ],
        ]);
    }
}
