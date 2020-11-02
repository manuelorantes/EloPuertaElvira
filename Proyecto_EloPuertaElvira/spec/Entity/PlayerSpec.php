<?php

namespace spec\App\Entity;

use App\Entity\Player;
use PhpSpec\ObjectBehavior;

class PlayerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Player::class);
    }

    function it_initialize_name_in_good_way()
    {
        $this->beConstructedWith();
        $this->getName()->shouldReturn('Nuevo alumno');
    }


    function it_changes_name()
    {
        $this->beConstructedWith('Francisco');
        $this->getName()->shouldReturn('Francisco');

        $this->setName('Manuel');
        $this->getName()->shouldReturn('Manuel');
    }
}
