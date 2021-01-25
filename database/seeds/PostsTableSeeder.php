<?php

use Illuminate\Database\Seeder;
use App\Post;
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
        for ($i=0; $i<20; $i++) {
          $new_post = new Post();
          $new_post->username= $faker->userName();
          $new_post->title= $faker->sentence(2);
          $new_post->description= $faker->paragraphs(2, true);
          $new_post->post_date= $faker->date();
          $new_post->save();
        }
    }
}
