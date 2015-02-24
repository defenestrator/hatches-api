<?php namespace Hatches\Transformers;

 class UserTransformer extends Transformer {

     /*
      * @param $user
      * @return array
      */
     public function transform($user)
     {
         return [
             'name' => $user['name'],
             'joined'   => $user['created_at']
         ];
     }
 }