<?php


use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthAcceptanceTest extends TestCase
{
    use DatabaseTransactions, LoginLogout;

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
        $this->seeJson();
    }
}