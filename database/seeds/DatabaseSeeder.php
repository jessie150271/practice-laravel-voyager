<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //關閉外鍵偵測
        // $this->call(ItemsTableSeeder::class);
        $this->call(TestForeignCategoriesTableSeeder::class);
        $this->call(TestForeignItemsTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //開啟外鍵偵測
        
    }
}
