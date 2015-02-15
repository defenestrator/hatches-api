<?php

use Hatches\HatchReport;
use Hatches\Privacy;
use Hatches\User;
use Hatches\Fishery;
use Hatches\Hatch;
use Faker\Factory as Faker;

class HatchReportsTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$faker = Faker::create('en-US');
        $privacyIds = Privacy::lists('id');
        $userIds = User::lists('id');
        $fisheryIds = Fishery::lists('id');
        $hatchIds = Hatch::lists('id');
		foreach(range(1, 30) as $index)
		{
			HatchReport::create([
                'user_id' => $faker->randomElement($userIds),
                'fishery_id' => $faker->randomElement($fisheryIds),
                'hatch_id' => $faker->randomElement($hatchIds),
                'start_time' => $faker->dateTimeThisYear(),
                'end_time'  => $faker->dateTimeThisYear(),
                'title' => $faker->sentence(),
                'report_body' => $faker->paragraph(),
                'hatch_intensity' => $faker->numberBetween(1, 10),
                'privacy_id' => $faker->randomElement($privacyIds)
			]);
		}
	}

}