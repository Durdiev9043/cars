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
        Schema::create('cars', function (Blueprint $table) {
            //'year','yurgani','model','company','number','type_fuel','pass_number','price','status'
            $table->id();
            $table->string('years')->nullable();
            $table->integer('yurgani')->nullable();
            $table->string('model')->nullable();
            $table->string('company');
            $table->string('number');
            $table->string('type_fuel')->nullable();
            $table->string('pass_number')->nullable();
            $table->integer('price');
            $table->tinyInteger('status')->default(0);
            $table->string('img1');
            $table->string('img2')->nullable();
            $table->string('img4')->nullable();
            $table->string('img3')->nullable();

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
        Schema::dropIfExists('cars');
    }
};
