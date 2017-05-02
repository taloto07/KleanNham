<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day')->unique();
            $table->timestamps();
        });

        Schema::create('hour_place', function (Blueprint $table) {
            $table->integer('place_id')->unsigned();
            $table->integer('hour_id')->unsigned();
            $table->integer('fromHour');
            $table->integer('fromMinute');
            $table->integer('untilHour');
            $table->integer('untilminute');
            $table->timestamps();

            $table->foreign('place_id')
                  ->references('id')
                  ->on('places')
                  ->onDelete('cascade');

            $table->foreign('hour_id')
                  ->references('id')
                  ->on('hours')
                  ->onDelete('cascade');

            $table->primary([ 'place_id', 'hour_id' ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hour_place');
        Schema::dropIfExists('hours');
    }
}
