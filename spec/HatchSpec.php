<?php

namespace spec\Hatches;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HatchSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Hatches\Hatch');
    }
}
