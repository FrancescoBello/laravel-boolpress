<?php

use Illuminate\Database\Seeder;
use app\post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
          $new_post= new post();
          $new_post->username = $faker->userName();
          $new_post->title = $faker->sentence();
          $new_post->description = $faker->paragraphs();
          $new_post->post_date = $faker->date();
          $new_post->save();
        }
    }
}
