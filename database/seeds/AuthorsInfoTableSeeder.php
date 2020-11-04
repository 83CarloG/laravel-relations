<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\AuthorInfo;
use App\Author;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();
        foreach ($authors as $author) {

            $newAuthorInfo = new AuthorInfo;

            $newAuthorInfo->author_id = $author->id;
            $newAuthorInfo->nationality = $faker->country();
            $newAuthorInfo->bio = $faker->paragraph(5, true);
            if (rand(0, 1) == 1) {
                $newAuthorInfo->image = $faker->imageUrl(200, 300);
                $newAuthorInfo->alive = 0;
            }
            $newAuthorInfo->save();
        }
    }
}
