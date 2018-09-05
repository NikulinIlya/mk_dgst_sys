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
            $table->integer('classify_id')->unsigned()->default(1);
            $table->foreign('classify_id')->references('id')->on('classifications');

            $table->integer('parameter_id')->unsigned()->default(1);
            $table->foreign('parameter_id')->references('id')->on('parameters');
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
