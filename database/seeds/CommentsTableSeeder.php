<?php

use Hatches\Comment;
use Hatches\User;
use Faker\Factory as Faker;

/**
 * Class CommentsTableSeeder
 */
class CommentsTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        Comment::unguard();

        $faker = Faker::create('en-US');

        $userIds = User::lists('id')->all();

        foreach (range(1, 30) as $index) {

            Comment::create([
                'user_id' => $faker->randomElement($userIds),
                'comment' => $faker->paragraph(3)
            ]);
        }
    }

}