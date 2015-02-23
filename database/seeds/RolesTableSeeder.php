<?php

use Hatches\Role;
/**
 * Class RolesTableSeeder
 */
class RolesTableSeeder extends DatabaseSeeder {

    public function run()
	{
        $roles = [
            'God',
            'Administrator',
            'Editor',
            'Moderator',
            'Customer',
            'User',
            'Guest',
            'Warned',
            'Banned'
        ];
		foreach($roles as $role)
		{
			Role::create([
                'role' => $role
			]);
		}
	}

}