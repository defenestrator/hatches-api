<?php

use Hatches\FlyPattern;
use Hatches\Privacy;
use Hatches\User;
use Faker\Factory as Faker;

class FlyPatternsTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $faker = Faker::create();
        $privacyIds = Privacy::lists('id')->all();
        $userIds = User::lists('id')->all();

        foreach (range(1, 30) as $index) {
            FlyPattern::create([
                'user_id' => $faker->randomElement($userIds),
                'name' => $faker->name,
                'recipe' => $faker->paragraph(),
                'instructions' => $faker->paragraph(),
                'privacy_id' => $faker->randomElement($privacyIds)
            ]);
        }
    }

}