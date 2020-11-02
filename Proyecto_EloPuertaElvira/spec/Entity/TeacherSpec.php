<?php

namespace spec\App\Entity;

use App\Entity\Teacher;
use PhpSpec\ObjectBehavior;

class TeacherSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Teacher::class);
    }
}
