<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_operators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cellcard',15)->nullable();
            $table->string('smart',15)->nullable();
            $table->string('metfone',15)->nullable();
            $table->string('qb',15)->nullable();
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
        Schema::dropIfExists('phone_operators');
    }
}
