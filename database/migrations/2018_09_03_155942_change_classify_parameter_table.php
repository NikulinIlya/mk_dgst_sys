<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeClassifyParameterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classify_parameter', function (Blueprint $table) {
            $table->integer('classify_id');
            $table->foreign('classify_id')->references('id')->on('classifications');

            $table->integer('parameter _id');
            $table->foreign('parameter _id')->references('id')->on('parameters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classify_parameter', function (Blueprint $table) {
            //
        });
    }
}
