<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laracasts\TestDummy as TestDummy;

/**
 * Class IntegrationTest
 */
class IntegrationTest extends TestCase
{
    use DatabaseTransactions, LoginLogout;

    /**
     * @test
     */
    public function test_root_route()
    {
        $this->visit('/')->see('Hatch.es');
        $this->assertResponseOk();

    }

    /**
     * @test
     */
    public function it_registers_a_user()
    {
        $credentials = [
            'name' => 'RegisterDummy',
            'email' => 'register@example.com',
            'password' => Hash::make('GoodPassword')
        ];
        $this->register($credentials);
//        $this->seeInDatabase('users', ['name' => 'RegisterDummy']);

    }

    /*
     * @test
     */
    public function test_it_gives_feedback_about_invalid_registration_input()
    {
        $this->createUser($overrides = ['name' => 'F', 'email' => 'fail_register@d', 'password' => '1']);
        $this->register($overrides);
        $this->seePageIs('auth/register');
//            ->see('The password must be at least 6 characters.')
//            ->see('The email must be a valid email address.');
        // @TODO Improve this, this is hacked together after Laravel 5.1 release.
    }

    /*
     * @test
     */
    public function test_it_requires_unique_email_to_register()
    {
        $this->createUser($overrides = ['email' => 'dummy@example.com']);
        $this->register($overrides);
        $this->seePageIs('auth/register');
        // @TODO Improve this, this is hacked together after Laravel 5.1 release.
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
            ->press('Login')->see('TestDummy');
        $this->seePageIs('/');
        $this->visit('auth/logout');
        $this->seePageIs('/');
    }


}
