<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newComic = new Comic();

            $newComic->title = $faker->words(rand(1, 5), true);
            $newComic->thumb = $faker->image(null, 360, 360, 'animals', true);
            $newComic->price = $faker->randomFloat(2, 5, 50);
            $newComic->description = $faker->paragraph(rand(3, 15));

            $newComic->save();

        }
    }
}
