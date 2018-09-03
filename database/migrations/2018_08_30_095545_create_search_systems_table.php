<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_systems', function (Blueprint $table) {
            $table->increments('id_search_system');
            $table->string('searcher_name', 255);
            $table->string('URL', 255);
            $table->string('code', 255);
            $table->string('operator_word')->nullable();
            $table->string('operator_not_word')->nullable();
            $table->string('operator_quote')->nullable();
            $table->string('operator_and')->nullable();
            $table->string('operator_2and')->nullable();
            $table->string('operator_or')->nullable();
            $table->string('data_type')->nullable();
            $table->string('operator_date')->nullable();
            $table->string('operator_url')->nullable();
            $table->string('operator_site')->nullable();
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
        Schema::dropIfExists('search_systems');
    }
}
