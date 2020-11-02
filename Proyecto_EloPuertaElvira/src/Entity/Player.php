<?php

namespace App\Entity;

class Player
{
    private $name;

    public function __construct(string $name = 'Nuevo alumno')
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

}
