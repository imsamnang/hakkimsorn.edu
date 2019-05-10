<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

  public function run()
  {
      // $this->call(CommunesTableSeeder::class);
      // $this->call(PhoneOperatorSeeder::class);
      $this->call(CategoryTableSeeder::class);
  }
}
