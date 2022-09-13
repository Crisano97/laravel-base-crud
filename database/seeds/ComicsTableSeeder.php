<?php

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newComic = new Comic();
            $newComic->title = $faker->unique()->realText(35);
            $newComic->description = $faker->realText();
            $newComic->thumb = $faker->imageUrl(500, 300, "comic");
            $newComic->price = $faker->randomFloat(2, 4, 15);
            $newComic->series = $faker->realText(15);
            $newComic->sale_date = $faker->date();
            $newComic->type = $faker->realText(15);
            $newComic->slug = Str::slug($newComic->title, '-');
            $newComic->save();
        }
    }
}
