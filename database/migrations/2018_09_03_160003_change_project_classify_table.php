<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProjectClassifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_classify', function (Blueprint $table) {
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            $table->integer('classify_id');
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
        Schema::table('project_classify', function (Blueprint $table) {
            //
        });
    }
}
