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
        // $this->call(ItemsTableSeeder::class); //Item

        // $this->call(TestForeignCategoriesTableSeeder::class); //一對一,一對多
        // $this->call(TestForeignItemsTableSeeder::class); //一對一,一對多

        // $this->call(UsersTableSeeder::class); //User

        // $this->call(TestForeignOrdersTableSeeder::class); //Order
        // $this->call(TestForeignItemOrdersTableSeeder::class); //Item_Order
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //開啟外鍵偵測
        
    }
}
