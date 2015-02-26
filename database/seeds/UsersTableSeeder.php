<?php

use Hatches\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends DatabaseSeeder
{

    public function run()
    {

        User::unguard();

        $faker = Faker::create('en-US');
        User::create([
            'name' => 'HatchGod',
            'email' => 'jeremy@edos.io',
            'password' => Hash::make('changeme!')
        ]);

        foreach (range(2, 50) as $index) {
            $name = $faker->userName;
            $email = $name . "@" . $faker->freeEmailDomain;
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($faker->word)
            ]);
        }
    }

}