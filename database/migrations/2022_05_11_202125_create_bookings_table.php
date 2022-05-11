<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            //'car_id','client_id','from_date','to_date','status'
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('client_id');
            $table->dateTime('to_date');
            $table->dateTime('from_date');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
