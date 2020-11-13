<?php

namespace App\Entity;

class Player
{
    private string $name;
    private int $elo;

    public function __construct(string $name, int $elo)
    {
        $this->name = $name;
        $this->elo = $elo;
    }

    public function getElo() :int
    {
       return $this->elo;
    }

    public function setElo(int $newElo) :void
    {
        $this->elo = $newElo;
    }

}
