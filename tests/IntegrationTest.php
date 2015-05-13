<?php

use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;
use Laracasts\TestDummy\Factory as TestDummy;

/**
 * Class IntegrationTest
 */
class IntegrationTest extends TestCase
{
    use DatabaseTransactions, RegistersUsers;

    /**
     * @test
     */
    public function test_root_route()
    {
        $this->visit('/');
        $this->andSee('Brand');
    }

    /**
     * @test
     */
    public function it_registers_a_user()
    {
        $credentials = ['name' => 'RegisterDummy', 'email' => 'register@example.com', 'password' => Hash::make('GoodPassword')];
        $this->register($credentials)
            ->verifyInDatabase('users', ['email' => 'register@example.com'])
            ->andSee($credentials['name']);
    }

    /*
     * @test
     */
    public function test_it_gives_feedback_about_invalid_registration_input()
    {
        $this->createUser($overrides = ['name' => 'F', 'email' => 'fail_register@d', 'password' => '1']);
        $this->register($overrides);
        $this->andSeePageIs('auth/register')
            ->andSee('The password must be at least 6 characters.')
            ->andSee('The email must be a valid email address.');

    }

    /*
     * @test
     */
    public function test_it_requires_unique_email_to_register()
    {
        $this->createUser($overrides = ['email' => 'dummy@example.com']);
        $this->register($overrides)->andSee('The email has already been taken.');

    }

    /**
     * @test
     */
    public function test_login_and_logout_with_valid_credentials()
    {
        $this->createUser();
        $this->visit('auth/login')
            ->type('dummy@example.com', 'email')
            ->type('GoodPassword', 'password')
            ->press('Login');
        $this->andSee('TestDummy');
        $this->visit('auth/logout');
        $this->andSee('Login');
    }


}
