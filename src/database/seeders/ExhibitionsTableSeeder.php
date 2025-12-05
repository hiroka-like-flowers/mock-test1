<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exhibitions')->insert([
            [
                'user_id' => '1',
                'name' => '腕時計',
                'brand' => 'Rolax',
                'image' => 'storage/Armani+Mens+Clock.jpg',
                'price' => '15000',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'category_id' => '1',
                'condition_id' => '1',
            ],
            [
                'user_id' => '2',
                'name' => 'HDD',
                'brand' => '西芝',
                'image' => 'storage/HDD+Hard+Disk.jpg',
                'price' => '5000',
                'description' => '高速で信頼性の高いハードディスク',
                'category_id' => '2',
                'condition_id' => '2',
            ],
            [
                'user_id' => '1',
                'name' => '玉ねぎ3束',
                'brand' => 'なし',
                'image' => 'storage/iLoveIMG+d.jpg',
                'price' => '300',
                'description' => '新鮮な玉ねぎ3束のセット',
                'category_id' => '11',
                'condition_id' => '3',
            ],
            [
                'user_id' => '1',
                'name' => '革靴',
                'brand' => '',
                'image' => 'storage/Leather+Shoes+Product+Photo.jpg',
                'price' => '4000',
                'description' => 'クラシックなデザインの革靴',
                'category_id' => '1',
                'condition_id' => '4',
            ],
            [
                'user_id' => '2',
                'name' => 'ノートPC',
                'brand' => '',
                'image' => 'storage/Living+Room+Laptop.jpg',
                'price' => '45000',
                'description' => '高性能なノートパソコン',
                'category_id' => '2',
                'condition_id' => '1',
            ],
            [
                'user_id' => '2',
                'name' => 'マイク',
                'brand' => 'なし',
                'image' => 'storage/Music+Mic+4632231.jpg',
                'price' => '8000',
                'description' => '高音質のレコーディング用マイク',
                'category_id' => '2',
                'condition_id' => '2',
            ],
            [
                'user_id' => '1',
                'name' => 'ショルダーバッグ',
                'brand' => '',
                'image' => 'storage/Purse+fashion+pocket.jpg',
                'price' => '3500',
                'description' => 'おしゃれなショルダーバッグ',
                'category_id' => '1',
                'condition_id' => '3',
            ],
            [
                'user_id' => '1',
                'name' => 'タンブラー',
                'brand' => 'なし',
                'image' => 'storage/Tumbler+souvenir.jpg',
                'price' => '500',
                'description' => '使いやすいタンブラー',
                'category_id' => '10',
                'condition_id' => '4',
            ],
            [
                'user_id' => '1',
                'name' => 'コーヒーミル',
                'brand' => 'Starbacks',
                'image' => 'storage/Waitress+with+Coffee+Grinder.jpg',
                'price' => '4000',
                'description' => '手動のコーヒーミル',
                'category_id' => '10',
                'condition_id' => '1',
            ],
            [
                'user_id' => '1',
                'name' => 'メイクセット',
                'brand' => '',
                'image' => 'storage/外出メイクアップセット.jpg',
                'price' => '2500',
                'description' => '便利なメイクアップセット',
                'category_id' => '6',
                'condition_id' => '2',
            ],
        ]);
    }
}
