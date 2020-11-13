<?php


namespace App\Entity;

class Admin
{
    private string $userName;

    private string $password;

    private Club $club;

    public function __construct(string $userName, string $password, string $clubName)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->club = new Club($clubName);
    }

    private function addNewPlayerNotMemberToClub(string $name, int $elo = 0){
        $player = new Player($name, $elo);

        $this->club->addPlayer($player);
    }

    private function addNewPlayerMemberToClub(string $name, int $elo = 0){
        $player = new Player($name, $elo);

        $this->club->addPlayer($player, true);
    }

    private function addMemberToClub(Player $player){

        $this->club->playerBecomeMember($player);
    }

}