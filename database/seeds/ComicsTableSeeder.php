<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 12; $i++) {

            // Nuovo oggetto classe Comic
            $newComic = new Comic();

            //Lo popolo con i miei dati fake
            $newComic->title = $faker->text(30);
            if (rand(0, 1) === 1) {
                $newComic->original_title = $faker->text(50);
            }
            $newComic->author = $faker->name(30);
            $newComic->number  = $faker->numberBetween(1, 1000);
            $newComic->n_pages  = $faker->numberBetween(20, 400);
            $newComic->edition  = $faker->company();
            $newComic->reading = (rand(0, 1) == 1) ? 'ltr' : 'rtl';
            $newComic->price = $faker->randomFloat(2, 1, 1000);
            $newComic->color = rand(0, 1);
            $newComic->release = $faker->year();
            $newComic->cover = $faker->imageUrl(200, 300);
            $newComic->description = $faker->text($maxNbChars = 200);
            $newComic->save();
        }
    }
}
