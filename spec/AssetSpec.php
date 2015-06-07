<?php

namespace spec\Hatches;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;


class AssetSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Hatches\Asset');
    }

    function it_stores_a_path_to_a_media_asset()
    {
        
    }

}
