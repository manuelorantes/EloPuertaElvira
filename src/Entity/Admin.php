<?php

namespace App\Entity;

use App\Exceptions\AlreadyIsAMemberException;
use App\Exceptions\AlreadyIsInTheClubExpection;

class Admin
{
    private Club $club;

    public function __construct(string $clubName)
    {
        $this->club = new Club($clubName);
    }

    public function addPlayerToClub(Player $player, $isMember = false): void
    {
        foreach ($this->getClub()->getMembers() as $member){
            if ($member->getName() === $player->getName()) {
                throw new AlreadyIsAMemberException();
            }
        }

        foreach ($this->getClub()->getPlayers() as $clubPlayer){
            if ($clubPlayer->getName() === $player->getName()) {
                throw new AlreadyIsInTheClubExpection();
            }
        }

        $this->getClub()->addPlayer($player, $isMember);

    }

    public function addNewPlayerNotMemberToClub(Player $player, $isMember = false): void
    {
        $this->club->addPlayer($player, $isMember);
    }

    public function addMemberToClub(Player $player): void
    {

        $this->club->playerBecomeMember($player);
    }

    public function getClub(): Club
    {
        return $this->club;
    }

}