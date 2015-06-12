<?php

use Hatches\TripReport;
use Hatches\Privacy;
use Hatches\User;
use Hatches\Fishery;
use Faker\Factory as Faker;

class TripReportsTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $faker = Faker::create();
        $privacyIds = Privacy::lists('id')->all();
        $userIds = User::lists('id')->all();
        $fisheryIds = Fishery::lists('id')->all();

        foreach (range(1, 30) as $index) {
            TripReport::create([
                'user_id' => $faker->randomElement($userIds),
                'fishery_id' => $faker->randomElement($fisheryIds),
                'start_time' => $faker->dateTimeThisYear(),
                'end_time' => $faker->dateTimeThisYear(),
                'title' => $faker->sentence(),
                'report_body' => $faker->paragraph(),
                'privacy_id' => $faker->randomElement($privacyIds)
            ]);
        }
    }

}