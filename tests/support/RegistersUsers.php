<?php
use Laracasts\TestDummy\Factory as TestDummy;

trait RegistersUsers
{
    protected function register(array $overrides)
    {
        $fields = $this->getRegisterFields($overrides);

        return $this->visit('auth/register')->andsubmitForm('Register', $fields);
    }

    protected function getRegisterFields(array $overrides)
    {
        $user = TestDummy::attributesFor('Hatches\User', $overrides);

        return $user + ['password_confirmation' => $user['password']];
    }
}

