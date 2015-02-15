<?php

use Hatches\Fishery;
use Hatches\Privacy;
use Hatches\User;
use Hatches\Habitat;
use Faker\Factory as Faker;

/**
 * Class FisheriesTableSeeder
 */
class FisheriesTableSeeder extends DatabaseSeeder {

	public function run()
	{
        Fishery::unguard();

        $faker = Faker::create('en-US');

        $privacyIds = Privacy::lists('id');
        $userIds = User::lists('id');
        $habitatIds = Habitat::lists('id');

        foreach(range(1, 30) as $index) {

            Fishery::create([
                'name' => $faker->sentence(),
                'regs' => $faker->url,
                'management' => $faker->word,
                'notes' => $faker->paragraph(3),
                'lat' => $faker->latitude,
                'lng' => $faker->longitude,
                'user_id' => $faker->randomElement($userIds),
                'privacy_id' => $faker->randomElement($privacyIds),
                'habitat_id' => $faker->randomElement($habitatIds),
                'stillwater' => $faker->boolean()
            ]);
        }
	}

}