<?php

trait LoginLogout
{
    // @TODO Make this dynamic
    protected function doLogin()
    {
        $this->visit('auth/login')
            ->type('dummy@example.com', 'email')
            ->type('password', 'password')
            ->press('Login');

        return $this;
    }

    protected function doLogout()
    {
        $this->visit('auth/logout');
    }

}

