<?php

use Hatches\Prey;
use Hatches\HatchType;
use Faker\Factory as Faker;

class PreyTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create();
        $hatchTypeIds = HatchType::lists('id');

		foreach(range(1, 10) as $index)
		{
			Prey::create([
                'genus' => $faker->word,
                'species' => $faker->word,
                'hatch_type_id' => $faker->randomElement($hatchTypeIds),
                'common_name'   => $faker->sentence()
			]);
		}
	}

}