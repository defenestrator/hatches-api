<?php namespace Hatches\Transformers;
/**
 * Created with pure magic by:
 * jjboise for api.hatch.es
 * Date: 6/26/14
 * Time: 8:10 PM
 */

// use League\Fractal as Fractal;


class FisheryTransformer extends Transformer
{
    /*
      * @param $fishery
      * @return array
      */
    public function transform($fishery)
    {

            return [
                'name' => $fishery['name'],
                'regs' => $fishery['regs'],
                'management' => $fishery['notes'],
                'notes' => (int)$fishery['yr'],
                'lat' => (float)$fishery['lat'],
                'lng' => (float)$fishery['lng'],
                'user_id' => (int)$fishery['user_id'],
                'habitat_id' => (int)$fishery['habitat_id'],
                'stillwater' => (boolean)$fishery['stillwater']
            ];
    }
} 