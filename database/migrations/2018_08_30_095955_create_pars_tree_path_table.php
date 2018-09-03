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
            $table->integer('ancestor_id');
            $table->integer('descendant_id');
            $table->integer('length');
            $table->primary(['ancestor_id', 'descendant_id']);
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
