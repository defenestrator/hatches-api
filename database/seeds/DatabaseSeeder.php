<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    private $tables = [
        'assets',
        'comments',
        'fisheries',
        'fishery_comment',
        'fishery_fish_species',
        'fishery_hatch',
        'fishery_tag',
        'fish_species',
        'flyboxes',
        'flybox_tag',
        'fly_patterns',
        'fly_pattern_asset',
        'fly_pattern_comment',
        'fly_pattern_tag',
        'habitats',
        'hatches',
        'hatch_reports',
        'hatch_report_asset',
        'hatch_report_comment',
        'hatch_report_tag',
        'hatch_tag',
        'hatch_types',
        'maps',
        'prey',
        'privacy',
        'roles',
        'tags',
        'trip_reports',
        'trip_report_asset',
        'trip_report_comment',
        'trip_report_tag',
        'users',
        'buddy_user',
        'role_user',
        'water_data',
        'weather'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanDatabase();

        Model::unguard();

        $this->call('RolesTableSeeder');
        $this->command->info('Roles table seeded!');

        $this->call('PrivacyTableSeeder');
        $this->command->info('Privacy table seeded!');

        $this->call('HabitatsTableSeeder');
        $this->command->info('Habitats table seeded!');

        $this->call('HatchTypesTableSeeder');
        $this->command->info('Hatch Types table seeded!');

        $this->call('MapsTableSeeder');
        $this->command->info('Maps table seeded!');

        $this->call('TagsTableSeeder');
        $this->command->info('Tag table seeded!');

        $this->call('WaterDataTableSeeder');
        $this->command->info('Waterdata table seeded!');

        $this->call('WeatherTableSeeder');
        $this->command->info('Weather table seeded!');

        $this->call('UsersTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('FisheriesTableSeeder');
        $this->command->info('Fisheries table seeded!');

        $this->call('HatchesTableSeeder');
        $this->command->info('Hatches table seeded!');

        $this->call('AssetsTableSeeder');
        $this->command->info('Asset table seeded!');

        $this->call('PreyTableSeeder');
        $this->command->info('Prey table seeded!');

        $this->call('TripReportsTableSeeder');
        $this->command->info('Trip Reports table seeded!');

        $this->call('FlyPatternsTableSeeder');
        $this->command->info('FlyPatterns table seeded!');

        $this->call('HatchReportsTableSeeder');
        $this->command->info('Fishery table seeded!');

        $this->call('FishSpeciesTableSeeder');
        $this->command->info('Fish Species table seeded!');

        $this->call('FlyboxesTableSeeder');
        $this->command->info('Flyboxes table seeded!');

        $this->call('CommentsTableSeeder');
        $this->command->info('Comment table seeded!');

        $this->call('LookupTableSeeder');
        $this->command->info('Lookup tables seeded!');


    }

    private function cleanDatabase()
    {
        foreach ($this->tables as $tableName) {
            DB::table($tableName)->delete();
        }
    }

}
