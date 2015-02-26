<?php

use Hatches\Privacy;

class PrivacyTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $privacy_setting = array('Public', 'Private', 'Buddies');
        foreach ($privacy_setting as $privacy) {
            Privacy::create([
                'privacy' => $privacy
            ]);
        }
    }

}