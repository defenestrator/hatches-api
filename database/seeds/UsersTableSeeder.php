<?php

use Hatches\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends DatabaseSeeder {

	public function run()
	{

        User::unguard();

		$faker = Faker::create('en-US');

		foreach(range(1, 50) as $index) {
            $first = $faker->firstName;
            $last = $faker->lastName;
            $dotName = $first.".".$last;
            $email = $dotName."@".$faker->freeEmailDomain;
            User::create([
                'roles_id' => $faker->numberBetween($min=2, $max=9),
                'first_name' => $first,
                'last_name' => $last,
                'nickname' => $dotName,
                'email' => $email,
                'password' => Hash::make($faker->word)
            ]);
		}
        User::create([
            'roles_id' => 6,
            'first_name' => '',
            'last_name' => '',
            'nickname' => 'pjaustin',
            'email' => 'love2board21@hotmail.com',
            'password' => Hash::make($faker->word)
        ]);
	}

}