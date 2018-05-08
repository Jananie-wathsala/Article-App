<?php
use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Article::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Article::create(array(
                'title' => $faker->sentence,
               'image' => $faker->imageUrl($width = 480, $height = 480),
               'thumbnail' => $faker->imageUrl($width = 150, $height = 150),
               'description' => implode($faker->paragraphs($nb = 10, $asText = false)),
                'body' => implode($faker->paragraphs($nb = 100, $asText = false)),
                'author' => $faker->name,
            ));
        }
    }
}
