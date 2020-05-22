<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestForeignOrder extends Model
{
    public function items(){
        return $this->belongsToMany(TestForeignItem::class)->withTimestamps()->withPivot('qty');
    }
}
