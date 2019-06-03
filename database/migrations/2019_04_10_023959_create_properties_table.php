<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
  public function up()
  {
    Schema::create('properties', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->integer('category_id')->unsigned();
      $table->integer('parent_id')->unsigned();
      $table->tinyInteger('property_type_id')->unsigned();
      $table->tinyInteger('sub_type_id')->unsigned();
      $table->string('title',250);
      $table->string('slug',250);
      $table->string('size');
      $table->float('price');
      $table->text('description')->nullable();
      $table->string('name');
      $table->string('phone1');
      $table->string('phone2')->nullable();
      $table->string('phone3')->nullable();
      $table->string('email')->nullable();
      $table->tinyInteger('province_id');
      $table->Integer('district_id');
      $table->Integer('commune_id');
      $table->text('location')->nullable();
      $table->Integer('view_count')->default(0);
      $table->tinyInteger('is_active')->default(1);
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('properties');
  }
}
