<?php

use Hatches\Flybox;
use Hatches\Privacy;
use Hatches\User;
use Faker\Factory as Faker;

class FlyboxesTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $faker = Faker::create();
        $privacyIds = Privacy::lists('id');
        $userIds = User::lists('id');

        foreach (range(1, 30) as $index) {
            Flybox::create([
                'flybox_name' => $faker->name,
                'description' => $faker->paragraph(),
                'user_id' => $faker->randomElement($userIds),
                'privacy_id' => $faker->randomElement($privacyIds)
            ]);
        }
    }

}