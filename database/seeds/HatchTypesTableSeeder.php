<?php

use Hatches\HatchType;

class HatchTypesTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $hatch_types = [
            'midge',
            'caddis',
            'mayfly',
            'stonefly',
            'terrestrial',
            'baitfish',
            'crustacean',
            'worm',
            'odonata',
            'other'
        ];

        foreach ($hatch_types as $hatch_type) {
            HatchType::create([
                'type' => $hatch_type,
                'description' => strtoupper($hatch_type)
            ]);
        }
    }
}