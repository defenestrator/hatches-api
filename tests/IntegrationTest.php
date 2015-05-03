<?php
use Laracasts\Integrated\Services\DatabaseTransactions;
use Laracasts\TestDummy\Factory as TestDummy;

/**
 * Class IntegrationTest
 */
class IntegrationTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function test_root_route()
    {
        $this->visit('/');
    }

    /**
     * @test
     */
    public function test_login_page()
    {
        $this->visit('auth/login');
        $this->andSee('Login');
    }

    public function it_displays_all_trip_reports()
    {
        $this->visit('trip-reports');
        $this->andSee('Trip Reports');
    }

}
