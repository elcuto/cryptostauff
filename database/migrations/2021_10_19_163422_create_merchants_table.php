<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('shopname');
            $table->string('email');
            $table->string('phoneno');
            $table->string('logo')->nullable();
            $table->string('url')->nullable();
            $table->string('ip')->nullable();
            $table->text('merchant_guid')->nullable();
            $table->text('guid')->nullable();
            $table->text('apikey')->nullable();
            $table->longText('xpub')->nullable();
            $table->string('password');
            $table->boolean('isactive')->default(true);
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
        Schema::dropIfExists('merchants');
    }
}