<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('place_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('message');
            $table->double('overall')->default(0);
            $table->double('meal_quality')->default(0);
            $table->double('staff')->default(0);
            $table->double('parking')->default(0);
            $table->double('hygiene')->default(0);
            $table->double('location')->default(0);
            $table->timestamps();

            $table->foreign('place_id')
                  ->references('id')
                  ->on('places');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
