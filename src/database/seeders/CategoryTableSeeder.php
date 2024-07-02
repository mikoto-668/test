<?php

Illuminate\Database\Seeder

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::create([
        'id' => 1,
        'name' => '商品のお届けについて',
       ]);

       Category::create([
        'id' => 2,
        'name' => '商品の交換について',
       ]);

       Category::create([
        'id' => 3,
        'name' => '商品トラブル',
       ]);

       Category::create([
        'id' => 4,
        'name' => 'ショップへのお問い合わせ',
       ]);

       Category::create([
        'id' => 5,
        'name' => 'その他',
       ]);
    }
}
