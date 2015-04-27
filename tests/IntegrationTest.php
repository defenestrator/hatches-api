<?php

use Laracasts\TestDummy\Factory as TestDummy;

class IntegrationTest extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */


    public function testBasicExample()
    {
        $this->visit('/');
    }

    public function test_login()
    {
        $this->visit('auth/login');
        $this->andSee('Login');

    }

}
