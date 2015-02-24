<?php

namespace spec\Hatches;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Hatches\User');
    }

    function it_should_implement_authenticatable_contract()
    {
        $this->shouldImplement('Illuminate\Contracts\Auth\Authenticatable');
    }

    function it_should_allow_password_resets()
    {
        $this->shouldImplement('Illuminate\Contracts\Auth\CanResetPassword');
    }

    function it_should_store_name_as_a_string()
    {
        $this['name'] = 'specman';
        $this['name']->shouldReturn('specman');
    }

    function it_should_store_email_as_a_string()
    {
        $this['email'] = 'specman@example.com';
        $this['email']->shouldReturn('specman@example.com');
    }

}
