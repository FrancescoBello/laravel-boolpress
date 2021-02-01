<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 5; $i++) {
        $new_tag= new Tag();
        $new_tag->name=$faker->words(3, true);
        $new_tag->save();
      };
    }
}
