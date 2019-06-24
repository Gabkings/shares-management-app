<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCgSoilNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg_soil_names', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soil_name_code');
            $table->string('soil_name_value');
            $table->string('soil_name_SYMBOL');
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
        Schema::dropIfExists('cg_soil_names');
    }
}
