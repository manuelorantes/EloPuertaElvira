<?php

namespace spec\App\Entity;

use App\Entity\Group;
use PhpSpec\ObjectBehavior;

class GroupSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Group::class);
    }
}
