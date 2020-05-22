<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestForeignItemOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_foreign_item_test_foreign_order', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('test_foreign_item_id ')->index()->unsigned();
            $table->foreign('test_foreign_item_id ')->references('id')->on('test_foreign_items')->onDelete('cascade');
            $table->bigInteger('test_foreign_order_id ')->index()->unsigned();
            $table->foreign('test_foreign_order_id ')->references('id')->on('test_foreign_orders')->onDelete('cascade');
            $table->integer('qty')->default(1);
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
        Schema::table('test_foreign_item_test_foreign_order',function(Blueprint $table){
            $table->dropForeign('test_foreign_item_id','test_foreign_order_id ');
        });
        Schema::dropIfExists('test_foreign_item_orders');
    }
}
