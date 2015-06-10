<?php namespace Hatches\Transformers;

use Hatches\FishSpecies;
use League\Fractal\TransformerAbstract;

class FishSpeciesTransformer extends TransformerAbstract
{

    public function transform(FishSpecies $fishSpecies)
    {
        return [
            'name' => $fishSpecies->common_name,
            'genus' => $fishSpecies->genus,
            'species' => $fishSpecies->species,
            'description' => $fishSpecies->description,
            'habitat' => $fishSpecies->habitat_id
        ];
    }
}