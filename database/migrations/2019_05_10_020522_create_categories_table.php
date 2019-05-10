<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{

  public function up()
  {
      Schema::create('categories', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('parent_id')->unsigned();
          $table->string('category_name',50);
          $table->string('description',200)->nullable();
          $table->string('icon',255)->nullable();
          $table->string('url',255)->nullable();
          $table->increments('is_active')->default(1);
          $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('categories');
  }
}
