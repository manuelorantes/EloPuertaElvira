<?php


namespace App\Entity;


class Club
{
    private string $name;
    private array $players = [];
    private array $members = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addPlayer(Player $player, bool $newMember = false) :void
    {
        $this->players[] = $player;

        if ($newMember){
            $this->members[] = $player;
        }
    }

    public function playerBecomeMember(Player $player) :void
    {
        if(in_array($player, $this->players, true) && !in_array($player, $this->members, true)){
            $this->members[] = $player;
        }
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function getName(): string
    {
        return $this->name;
    }
}