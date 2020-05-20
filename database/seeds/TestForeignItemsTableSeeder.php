<?php

use Illuminate\Database\Seeder;
use App\TestForeignItem;

class TestForeignItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //清空表格
        TestForeignItem::truncate();
        
        //建立資料
        factory(TestForeignItem::class, 10)->create();
    }
}
