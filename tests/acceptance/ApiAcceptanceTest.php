<?php

use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;

class AuthAcceptanceTest extends TestCase
{
    use RegistersUsers, DatabaseTransactions, LoginLogout;

    /**
     * the call get() means we are testing an API,
     * see Laracasts\Integrated\Extensions\Traits\ApiRequests
     * @test
     */
    function test_api_routes_return_json()

    {
        $this->createUser();
        $this->visit('auth/login')
            ->type('dummy@example.com', 'email')
            ->type('GoodPassword', 'password')
            ->press('Login');
        $this->get('v1/fisheries');
    }
}