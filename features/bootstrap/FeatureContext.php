<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use Laracasts\Behat\Context\Migrator;
use \Laracasts\Behat\Context\DatabaseTransactions;
use PHPUnit_Framework_Assert as PHPUnit;

/**
 * Defines application features from the specific context.
 */

/** @noinspection PhpUndefinedClassInspection */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    use Migrator, DatabaseTransactions;

    /**
     * @var name
     */
    protected $name;

    /**
     * @var email
     */
    protected $email;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }


    /**
     * @When I register :name :email
     *
     */
    public function iRegister($name, $email)
    {
        // dd(app()->environment());
        $this->name = $name;
        $this->email = $email;

        $this->visit('auth/register');
        $this->fillField('name', $name);
        $this->fillField('email', $email);
        $this->fillField('password', 'password');
        $this->fillField('password_confirmation', 'password');

        $this->pressButton('Register');

    }

    /**
     * @Then I should have an account
     */
    public function iShouldHaveAnAccount()
    {
        $this->assertSignedIn();
    }

    /**
     * @Given I have an account :arg1 :arg2
     */
    public function iHaveAnAccount($name, $email)
    {
        $this->iRegister($name, $email);
        $this->visit('auth/logout');
    }

    /**
     * @When I sign in
     */
    public function iSignIn()
    {
        $this->visit('auth/login');
        $this->fillField('email', $this->email);
        $this->fillField('password', 'password');
        $this->pressButton('Login');
    }

    /**
     * @When I sign in with invalid credentials
     */
    public function iSignInWithInvalidCredentials()
    {
        $this->visit('auth/login');

        $this->fillField('email', 'invalid@example.com');
        $this->fillField('password', 'invalid');
    }

    /**
     * @Then I should be logged in
     */
    public function iShouldBeLoggedIn()
    {
        $this->assertSignedIn();
    }

    /**
     * @Then I should not be logged in
     */
    public function iShouldNotBeLoggedIn()
    {
        PHPUnit::assertTrue(Auth::guest());
    }

    /**
     * @Then I am signed in
     */
    private function assertSignedIn()
    {
        PHPUnit::assertTrue(Auth::check());
        $this->assertPageAddress('/');
    }

    /**
     * @Then I sign out
     */
    public function iSignOut()
    {
        $this->visit('auth/logout');
        $this->assertPageAddress('/');
        PHPUnit::assertTrue(Auth::guest());
    }

    /**
     * @Given the registration is valid
     */
    public function theRegistrationIsValid()
    {
        throw new PendingException();
    }

    /**
     * @When the registration is submitted
     */
    public function theRegistrationIsSubmitted()
    {
        throw new PendingException();
    }

    /**
     * @Then a welcome email is sent to the new user
     */
    public function aWelcomeEmailIsSentToTheNewUser()
    {
        throw new PendingException();
    }

    /**
     * @Given the user has received the verificaiton email
     */
    public function theUserHasReceivedTheVerificaitonEmail()
    {
        throw new PendingException();
    }

    /**
     * @Given one hour has not expired
     */
    public function oneHourHasNotExpired()
    {
        throw new PendingException();
    }

    /**
     * @When the verification link is opened
     */
    public function theVerificationLinkIsOpened()
    {
        throw new PendingException();
    }

    /**
     * @Then the user email is validated
     */
    public function theUserEmailIsValidated()
    {
        throw new PendingException();
    }
}
