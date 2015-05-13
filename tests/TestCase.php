<?php

use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;
use Laracasts\TestDummy\Factory as TestDummy;

class TestCase extends IntegrationTest
{
	/**
	 * Creates the application.
	 *
	 * @return \Illuminate\Foundation\Application
	 */
	public function createApplication()
	{
		$app = require __DIR__.'/../bootstrap/app.php';

		$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

		return $app;
	}

// Create a standard user account via Hatches\User
    protected function createUser(array $overrides = [])
    {
        TestDummy::create('Hatches\User', $overrides);
        return $this;
    }

}
