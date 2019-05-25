<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTypeTable extends Migration
{
  public function up()
  {
    Schema::create('property_type', function (Blueprint $table) {
      $table->increments('id');
      $table->Integer('property_id')->unsigned();
      $table->string('name_en',100)->nullable();
      $table->string('name_kh',100)->nullable();
      $table->tinyInteger('is_active')->default(1);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('property_type');
  }
}
