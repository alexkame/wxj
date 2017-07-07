<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no', 50);
            $table->integer('user_id');
            $table->string('receipt_address', 200);
            $table->string('snapshot', 2000);
            $table->string('snapshot', 2000);
            $table->tinyInteger('paid');
            $table->string('paid_at', 50);
            $table->tinyInteger('send');
            $table->tinyInteger('sign');
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
        Schema::dropIfExists('orders');
    }
}
