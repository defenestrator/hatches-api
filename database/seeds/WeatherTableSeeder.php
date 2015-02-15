<?php

use Hatches\Weather;
use Faker\Factory as Faker;

class WeatherTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Weather::create([
                'date' => $faker->dateTimeThisYear(),
                'lat'   => $faker->latitude,
                'lng'   => $faker->longitude,
                'weather_data' => $faker->paragraph()
			]);
		}
	}

}