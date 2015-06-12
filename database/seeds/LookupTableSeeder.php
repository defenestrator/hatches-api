<?php

use Hatches\User;
use Hatches\Tag;
use Hatches\Asset;
use Hatches\TripReport;
use Hatches\Hatch;
use Hatches\Fishery;
use Hatches\Flybox;
use Hatches\FishSpecies;
use Hatches\Role;
use Hatches\Comment;

use Faker\Factory as Faker;

class LookupTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $faker = Faker::create();

        $userIds = User::lists('id')->all();
        $tagIds = Tag::lists('id')->all();
        $commentIds = Comment::lists('id')->all();
        $assetIds = Asset::lists('id')->all();
        $tripReportIds = TripReport::lists('id')->all();
        $hatchIds = Hatch::lists('id')->all();
        $hatchReportIds = Hatch::lists('id')->all();
        $fisheryIds = Fishery::lists('id')->all();
        $fishSpeciesIds = FishSpecies::lists('id')->all();
        $flyPatternIds = FishSpecies::lists('id')->all();
        $flyboxIds = Flybox::lists('id')->all();
        $roleIds = ['2', '3', '4', '5', '6', '7', '8', '9'];

        foreach (range(1, 30) as $index) {
            DB::table('fishery_comment')->insert([
                'fishery_id' => $faker->randomElement($fisheryIds),
                'comment_id' => $faker->randomElement($commentIds)
            ]);

            DB::table('fishery_fish_species')->insert([
                'fishery_id' => $faker->randomElement($fisheryIds),
                'fish_species_id' => $faker->randomElement($fishSpeciesIds)
            ]);

            DB::table('fishery_hatch')->insert([
                'fishery_id' => $faker->randomElement($fisheryIds),
                'hatch_id' => $faker->randomElement($hatchIds)
            ]);

            DB::table('fishery_tag')->insert([
                'fishery_id' => $faker->randomElement($fisheryIds),
                'tag_id' => $faker->randomElement($tagIds)
            ]);

            DB::table('flybox_tag')->insert([
                'flybox_id' => $faker->randomElement($flyboxIds),
                'tag_id' => $faker->randomElement($tagIds)
            ]);

            DB::table('fly_pattern_asset')->insert([
                'fly_pattern_id' => $faker->randomElement($flyPatternIds),
                'asset_id' => $faker->randomElement($assetIds)
            ]);

            DB::table('fly_pattern_comment')->insert([
                'fly_pattern_id' => $faker->randomElement($flyPatternIds),
                'comment_id' => $faker->randomElement($commentIds)
            ]);

            DB::table('fly_pattern_tag')->insert([
                'fly_pattern_id' => $faker->randomElement($flyPatternIds),
                'tag_id' => $faker->randomElement($tagIds)
            ]);

            DB::table('hatch_report_asset')->insert([
                'hatch_report_id' => $faker->randomElement($hatchReportIds),
                'asset_id' => $faker->randomElement($assetIds)
            ]);

            DB::table('hatch_report_comment')->insert([
                'hatch_report_id' => $faker->randomElement($hatchReportIds),
                'comment_id' => $faker->randomElement($commentIds)
            ]);

            DB::table('hatch_report_tag')->insert([
                'hatch_report_id' => $faker->randomElement($hatchReportIds),
                'tag_id' => $faker->randomElement($tagIds)
            ]);

            DB::table('hatch_tag')->insert([
                'hatch_id' => $faker->randomElement($hatchIds),
                'tag_id' => $faker->randomElement($tagIds)
            ]);

            DB::table('trip_report_asset')->insert([
                'trip_report_id' => $faker->randomElement($tripReportIds),
                'asset_id' => $faker->randomElement($assetIds)
            ]);

            DB::table('trip_report_comment')->insert([
                'trip_report_id' => $faker->randomElement($tripReportIds),
                'comment_id' => $faker->randomElement($commentIds)
            ]);

            DB::table('trip_report_tag')->insert([
                'trip_report_id' => $faker->randomElement($tripReportIds),
                'tag_id' => $faker->randomElement($tagIds)
            ]);

            DB::table('buddy_user')->insert([
                'user_id' => $faker->randomElement($userIds),
                'buddy_id' => $faker->randomElement($userIds)
            ]);

            DB::table('role_user')->insert([
                'user_id' => $faker->randomElement($userIds),
                'role_id' => $faker->randomElement($roleIds)
            ]);

        }
    }
}