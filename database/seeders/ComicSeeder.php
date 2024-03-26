<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
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
          $pasta->name = $faker->firstNameFemale();
          $pasta->number = $faker->unique()->numberBetween(1, 100);
          $pasta->type = $faker->randomElement(['lunga', 'corta', 'cortissima']);
          $pasta->cooking_time = $faker->numberBetween(8, 14);
          $pasta->weight = $faker->randomElement([500, 1000]);
          $pasta->description = $faker->paragraph(8);
          $pasta->img = "https://picsum.photos/300/200";
          $pasta->save();
        }
      }}
