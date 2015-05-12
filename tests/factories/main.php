<?php
$factory('Hatches\User', ['name' => 'TestDummy',
    'email' => 'dummy@example.com',
    'password' => Hash::make('GoodPassword')
    ]);