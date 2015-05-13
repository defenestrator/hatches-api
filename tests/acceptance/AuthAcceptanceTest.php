<?php
/**
 * Created by PhpStorm.
 * User: jeremy
 * Date: 5/12/15
 * Time: 10:08 PM
 */
use Laracasts\Integrated\Extensions\Selenium;
use Laracasts\Integrated\Services\Laravel\Application as Laravel;

class AuthAcceptanceTest extends Selenium
{
    use Laravel, RegistersUsers;

    /**
     * @test
     */
    function it_registers_users()
    {

    }
}