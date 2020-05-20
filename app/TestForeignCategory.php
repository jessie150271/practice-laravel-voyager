<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestForeignCategory extends Model
{
    //指定表格名稱
    protected $table ='test_foreign_categories'; 
    protected $guarded = [];
    //
    public function items(){
        // return $this->hasMany('App\TestForeignItem');
        return $this->hasMany('App\TestForeignItem','category_id');
    }
}
