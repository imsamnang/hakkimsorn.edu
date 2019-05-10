<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
  public function run()
  {
	\DB::table('categories')->truncate();
	
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Phones & Tablets','icon'=>'default.png']);
  }
}
