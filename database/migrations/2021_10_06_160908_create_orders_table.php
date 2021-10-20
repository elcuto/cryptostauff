<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('order_type');
            $table->string('sender_id');
            $table->string('transaction_id');
            $table->float('amount');
            $table->boolean('status');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('send_currency')->unsigned();
            $table->foreign('send_currency')->references('id')->on('currencies');
            $table->bigInteger('receive_currency')->unsigned();
            $table->foreign('receive_currency')->references('id')->on('currencies');
            $table->longText('blockchain_address')->nullable();
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