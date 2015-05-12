<?php

use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;
// Why oh why?
use Laracasts\TestDummy\Factory as TestDummy;
class TestCase extends IntegrationTest
{
    protected $followRedirects = true;
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
        return TestDummy::create('Hatches\User', $overrides);
    }

    protected function register(array $overrides)
    {
        $fields = $this->getRegisterFields($overrides);
        return $this->visit('auth/register')
            ->andsubmitForm('Register', $fields);

    }

    protected function getRegisterFields(array $overrides)
    {
        $user = TestDummy::attributesFor('Hatches\User', $overrides);
        return $user + ['password_confirmation' => $user['password']];

    }
}
