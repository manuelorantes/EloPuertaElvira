<?php


namespace App\Entity;

class Admin
{
    private Club $club;

    public function __construct(string $clubName)
    {
        $this->club = new Club($clubName);
    }

    private function addNewPlayerNotMemberToClub(string $name, int $elo = 0, $isMember = false){
        $player = new Player($name, $elo);

        $this->club->addPlayer($player, $isMember);
    }

    private function addMemberToClub(Player $player){

        $this->club->playerBecomeMember($player);
    }

}