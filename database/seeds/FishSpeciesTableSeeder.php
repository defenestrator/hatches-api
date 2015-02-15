<?php

use Hatches\FishSpecies;
use Faker\Factory as Faker;

class FishSpeciesTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			FishSpecies::create([

			]);
		}
	}

}