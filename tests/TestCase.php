<?php

use Laracasts\TestDummy\Factory as TestDummy;
class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    protected $baseUrl = 'http://localhost';
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

// Create a standard user account via Hatches\User
    protected function createUser(array $overrides = [])
    {
        TestDummy::create('Hatches\User', $overrides);

        return $this;
    }


}
