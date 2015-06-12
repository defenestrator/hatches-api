<?php

use Hatches\Hatch;
use Hatches\HatchType;
use Faker\Factory as Faker;

class HatchesTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        Hatch::unguard();

        $faker = Faker::create();

        $hatchTypeIds = HatchType::lists('id')->all();

        foreach (range(1, 30) as $index) {
            Hatch::create([
                'name' => $faker->word,
                'hatch_type_id' => $faker->randomElement($hatchTypeIds),
                'description' => $faker->paragraph()
            ]);
        }
    }

}