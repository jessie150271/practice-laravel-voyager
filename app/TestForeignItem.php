<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestForeignItem extends Model
{
    //指定表格名稱
    protected $table ='test_foreign_items'; 
    protected $guarded = [];
    //
    public function category(){
        return $this->belongsTo(TestForeignCategory::class);
        // return $this->belongsTo(TestForeignCategory::class,'category_id','id');
    }
}
