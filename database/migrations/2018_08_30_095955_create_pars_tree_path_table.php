<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParsTreePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pars_tree_path', function (Blueprint $table) {
            $table->integer('id_ancestor')->primary();
            $table->integer('id_descendant')->primary()->default(0);
            $table->integer('tree_level');
            $table->integer('id_classify');
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
        Schema::dropIfExists('pars_tree_path');
    }
}
