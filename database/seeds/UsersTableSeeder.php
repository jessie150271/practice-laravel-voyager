<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //清空表格
        User::truncate();
        
        //建立資料
        factory(User::class, 10)->create();
    }
}
