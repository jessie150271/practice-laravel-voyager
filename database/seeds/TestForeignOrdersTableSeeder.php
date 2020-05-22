<?php

use App\TestForeignOrder;
use Illuminate\Database\Seeder;

class TestForeignOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //清空表格
        TestForeignOrder::truncate();
        
        //建立資料
        factory(TestForeignOrder::class, 20)->create();
    }
}
