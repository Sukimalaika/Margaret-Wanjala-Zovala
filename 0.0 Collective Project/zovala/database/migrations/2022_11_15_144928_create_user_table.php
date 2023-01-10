<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname',50);
            $table->string('other_names',200);
            $table->string('username',50);
            $table->tinyInteger('gender');
            $table->string('email',200);
            $table->text('password');
            $table->text('otp');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('town_id');
            $table->timestamps();
            //fk for role_id
            $table->foreign('role_id')->references('id')->on('role');
            $table->foreign('town_id')->references('id')->on('town');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
