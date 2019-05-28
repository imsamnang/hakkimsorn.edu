<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;

class PropertyTableSeeder extends Seeder
{

  public function run()
  {
    // reset the posts table
    DB::table('properties')->truncate();
    // generate 15 dummy posts data
    $posts = [];
    $faker = Factory::create();
    $date = Carbon::create(2019, 5, 27, 9);
    for ($i = 1; $i <= 10; $i++)
    {
        $image = "Post_Image_" . rand(1, 5) . ".jpg";
        $date->addDays(1);
        $publishedDate = clone($date);
        $createdDate = clone($date);
        $posts[] = [
            'user_id' => rand(1, 3),
            'category_id' => 5,
            'parent_id' => rand(39, 40),
            'title' => $faker->sentence(rand(8, 12)),
            'slug' => $faker->slug(),
            'size' => rand(350, 2500),
            'price' => rand(350, 1000),
            'description' => $faker->paragraphs(rand(5, 10), true),
            'name' => rand(350, 1000),
            'phone1' => rand(350, 1000),
            'phone2' => rand(350, 1000),
            'phone3' => rand(350, 1000),
            'email' => rand(350, 1000),
            'province_id' => rand(1, 25),
            'district_id' => rand(1, 197),
            'commune_id' => rand(1, 186),
            'location' => $faker->text(150, 250),
            'is_active' => rand(0, 1),
            // 'image' => rand(0, 1) == 1 ? $image : NULL,
            'created_at' => $createdDate,
            'updated_at' => $createdDate,
            // 'published_at' => $i < 5 ? $publishedDate : (rand(0,1) == 0) ? NULL : $publishedDate->addDays(4),
            'view_count' => rand(1,10) * 10
        ];
    }
    DB::table('properties')->insert($posts);
  }
}
