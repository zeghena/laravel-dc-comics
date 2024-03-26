<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
          $pasta = new Comic;
          $pasta->title = $faker->name(30);
          $pasta->thumb = $faker->title(40);
          $pasta->price = $faker->numberBetween(12, 25);
          $pasta->series = $faker->numberBetween(1, 20);
          $pasta->sale_date = $faker->dateTimeThisYear();
          $pasta->type = $faker->title(40);
          $pasta->save();
        }
      }}
