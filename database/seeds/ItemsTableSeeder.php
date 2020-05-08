<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //清空表格
        Item::truncate();
        
        //建立資料
        factory(Item::class, 20)->create();
        
        // $faker = Faker\Factory::create('zh-TW');
        // for ($i = 1; $i < 100; $i++) {
        //     Item::create(['id' => $i, 'category' => rand(0, 3), 'name' => '商品' . $i, 'photo' => $i . '.jpg', 'price' => rand(50, 1000), 'sort' => $i]);
        // }
    }
}
