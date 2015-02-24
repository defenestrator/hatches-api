<?php

use Hatches\WaterData;
use Faker\Factory as Faker;

class WaterDataTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			WaterData::create([
            'date' => $faker->dateTimeThisYear(),
            'lat'   => $faker->latitude,
            'lng'   => $faker->longitude,
            'water_data' => $faker->paragraph()
			]);
		}
	}
}