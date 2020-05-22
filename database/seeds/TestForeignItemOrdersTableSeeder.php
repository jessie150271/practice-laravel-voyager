<?php

use App\TestForeignItemOrder;
use Illuminate\Database\Seeder;

class TestForeignItemOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //清空表格
        TestForeignItemOrder::truncate();
        
        //建立資料
        factory(TestForeignItemOrder::class, 10)->create();
    }
}
