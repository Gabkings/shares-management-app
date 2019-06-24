<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCgSoilLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg_soil_libraries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_id');
            $table->integer('GRIDCODE ');
            $table->integer('grid_ID_1 ');
            $table->integer('MU_GLOBAL');
            $table->string('MU_SOURCE1');
            $table->string('SU_SYM90');
            $table->integer('SU_CODE90');
            $table->integer('T_TEXTURE');
            $table->integer('DRAINAGE');
            $table->integer('REF_DEPTH');
            $table->integer('AWC_CLASS');
            $table->integer('PHASE1');
            $table->integer('PHASE2');
            $table->integer('ROOTS');
            $table->integer('IL');
            $table->integer('SWR');
            $table->integer('ADD_PROP');
            $table->integer('T_GRAVEL');
            $table->integer('T_SAND');
            $table->integer('T_SILT');
            $table->integer('T_CLAY');
            $table->integer('T_USDA_TEX');
            $table->decimal('T_REF_BULK',8,11);
            $table->decimal('T_OC',8,11);
            $table->decimal('T_PH_H2O',8,11);
            $table->decimal('T_CEC_CLAY',8,11);
            $table->decimal('T_CEC_SOIL',8,11);
            $table->decimal('T_BS',8,11);
            $table->decimal('T_TEB',8,11);
            $table->decimal('T_CACO3',8,11);
            $table->decimal('T_CASO4',8,11);
            $table->decimal('T_ESP',8,11);
            $table->decimal('T_ECE',8,11);
            $table->integer('S_GRAVEL');
            $table->integer('S_SAND');
            $table->integer('S_SILT');
            $table->integer('S_CLAY');
            $table->integer('S_USDA_TEX');
            $table->decimal('S_REF_BULK',8,11);
            $table->decimal('S_OC',8,11);
            $table->decimal('S_PH_H2O',8,11);
            $table->decimal('S_CEC_CLAY',8,11);
            $table->decimal('S_CEC_SOIL',8,11);
            $table->decimal('S_BS',8,11);
            $table->decimal('S_TEB',8,11);
            $table->decimal('S_CACO3',8,11);
            $table->decimal('S_CASO4',8,11);
            $table->decimal('S_ESP',8,11);
            $table->decimal('S_ECE',8,11);
            $table->integer('soil_name_code')->unsigned()->nullable();
            $table->integer('soil_type_code')->unsigned()->nullable();
            $table->foreign('soil_name_code')->references('soil_name_code')->on('cg_soil_names')->onDelete('cascade');
            $table->foreign('soil_type_code')->references('soil_type_code')->on('cg_soil_types')->onDelete('cascade');
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
        Schema::dropIfExists('cg_soil_libraries');
    }
}
