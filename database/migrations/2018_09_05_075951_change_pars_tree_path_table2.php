<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeParsTreePathTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pars_tree_path', function (Blueprint $table) {
            $table->integer('classify_id')->unsigned()->default(1);
            $table->foreign('classify_id')->references('id')->on('classifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pars_tree_path', function (Blueprint $table) {
            //
        });
    }
}
