<?php

use Hatches\Habitat;

class HabitatsTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $habitats = [
            'Saltwater', 'Freshwater', 'Anadromous', 'Brackish'
        ];
        foreach ($habitats as $habitat) {
            Habitat::create([
                'habitat' => $habitat
            ]);
        }
    }

}