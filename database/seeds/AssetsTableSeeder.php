<?php

use Hatches\Asset;
use Hatches\Privacy;
use Hatches\User;
use Faker\Factory as Faker;

class AssetsTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create();

        $privacyIds = Privacy::lists('id');
        $userIds = User::lists('id');

		foreach(range(1, 30) as $index)
		{
			Asset::create([
                'type'      => $faker->numberBetween($min = 1, $max = 4),
                'user_id'   => $faker->randomElement($userIds),
                'uri'       => $faker->url,
                'privacy_id'=> $faker->randomElement($privacyIds)
			]);
		}
	}

}