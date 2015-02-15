<?php

use Hatches\Tag;
use Faker\Factory as Faker;

class TagsTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Tag::create([
                'tag' => $faker->word
			]);
		}
	}

}