<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //選單
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fid'); //父選單
            $table->integer('rank'); //階級
            $table->string('name'); //名稱
            $table->string('icon'); //icon
            $table->integer('sort'); //排序
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}