<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeParsTreePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pars_tree_path', function (Blueprint $table) {
            $table->integer('ancestor_id')->unsigned()->default(1);
            $table->foreign('ancestor_id')->references('id')->on('parameters');
            $table->integer('descendant_id')->unsigned()->default(1);
            $table->foreign('descendant_id')->references('id')->on('parameters');
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
