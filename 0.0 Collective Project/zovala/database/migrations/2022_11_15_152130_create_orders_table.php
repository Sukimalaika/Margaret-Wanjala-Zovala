<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('orders')) return;       //add this line to migration file
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer');
            $table->unsignedBigInteger('quantity');
            $table->unsignedFloat('price');
            $table-> dateTime('received')->nullable();
            $table-> dateTime('completed')->nullable();
            $table->unsignedFloat('amount_paid')->nullable();
            $table->unsignedInteger('tailor');
            $table-> dateTime('preferred_date');
            $table->string('occassion',200)->nullable();
            $table->string('details'); 
            $table->timestamps();

            $table->foreign('customer')->references('id')->on('user');
            $table->foreign('tailor')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
