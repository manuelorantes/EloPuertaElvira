<?php

namespace App\Entity;

class Player
{
    private string $name;
    private string $surname;
    private boolean $isMember;

    public function __construct(string $name = 'Nuevo alumno')
    {
        $this->name = $name;
    }

}
