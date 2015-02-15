<?php

use Hatches\Waterdata;
use Faker\Factory as Faker;

class WaterdataTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Waterdata::create([
            'date' => $faker->dateTimeThisYear(),
            'lat'   => $faker->latitude,
            'lng'   => $faker->longitude,
            'water_data' => $faker->paragraph()
			]);
		}
	}

}