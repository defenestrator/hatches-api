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

        $userIds = User::lists('id');
        $tagIds = Tag::lists('id');
        $commentIds = Comment::lists('id');
        $assetIds = Asset::lists('id');
        $tripReportIds = TripReport::lists('id');
        $hatchIds = Hatch::lists('id');
        $hatchReportIds = Hatch::lists('id');
        $fisheryIds = Fishery::lists('id');
        $fishSpeciesIds = FishSpecies::lists('id');
        $flyPatternIds = FishSpecies::lists('id');
        $flyboxIds = Flybox::lists('id');
        $roleIds = Role::lists('id');

        foreach (range(1, 30) as $index) {
            DB::table('fishery_comment')->insert([
                'fishery_id' => $faker->randomElement($fisheryIds),
                'comment_id' => $faker->randomElement($userIds)
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

            DB::table('user_buddy')->insert([
                'user_id' => $faker->randomElement($userIds),
                'user_id' => $faker->randomElement($userIds)
            ]);

            DB::table('user_role')->insert([
                'user_id' => $faker->randomElement($userIds),
                'role_id' => $faker->randomElement($roleIds)
            ]);

        }
    }
}