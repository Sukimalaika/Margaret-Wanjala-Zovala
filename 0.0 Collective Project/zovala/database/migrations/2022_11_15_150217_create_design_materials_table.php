<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('design_materials')) return;       //add this line to migration file
        Schema::create('design_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('design_id');
            $table->unsignedInteger('material_id');
            $table->timestamps();

            $table->foreign('design_id')->references('id')->on('designs');
            $table->foreign('material_id')->references('id')->on('materials');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_materials');
    }
}
