<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKhanSangkatToPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->integer('khan_id')->unsigned()->after('address');
            $table->integer('sangkat_id')->unsigned()->after('address');

            $table->foreign('khan_id')
                  ->references('id')
                  ->on('khans');

            $table->foreign('sangkat_id')
                  ->references('id')
                  ->on('sangkats');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->dropForeign(['khan_id']);
            $table->dropForeign(['sangkat_id']);
        });
    }
}
