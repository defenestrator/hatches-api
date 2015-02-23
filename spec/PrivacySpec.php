<?php

namespace spec\Hatches;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrivacySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Hatches\Privacy');
    }
}
