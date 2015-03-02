<?php namespace Hatches\Transformers;

use hatches\Flybox;
use League\Fractal\TransformerAbstract;

class FlyboxTransformer extends TransformerAbstract {

    public function transform(Flybox $flybox)
    {
        return [
            'name'           => $flybox->flybox_name,
            'description'    => $flybox->description,
            'user'           => $flybox->user_id,
            'privacy'        => $flybox->privacy_id,
            'updated'        => $flybox->updated_at,
        ];
    }
}