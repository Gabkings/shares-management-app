<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCgSoilTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg_soil_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soil_type_code');
            $table->integer('soil_name_code')->unsigned()->nullable();
            $table->string('soil_type_name');
            $table->foreign('soil_name_code')->references('soil_name_code')->on('cg_soil_names')->onDelete('cascade');
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
        Schema::dropIfExists('cg_soil_types');
    }
}
