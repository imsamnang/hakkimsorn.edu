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
          $table->tinyInteger('type_id')->unsigned();
          $table->tinyInteger('sub_type_id')->unsigned();
          $table->string('category_name',50);
          $table->string('category_name_kh',50)->nullable();
          $table->string('slug',100)->nullable();
          $table->string('description',200)->nullable();
          $table->string('form_name',100)->nullable();
          $table->string('form_header',255)->nullable();
          $table->string('form_footer',255)->nullable();
          $table->string('icon',255)->nullable();
          $table->string('url',255)->nullable();
          $table->tinyInteger('is_active')->default(1);
          $table->softDeletes();
          $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('categories');
  }
}
