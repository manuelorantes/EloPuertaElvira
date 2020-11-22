<?php

namespace Tests\Entity;

use App\Entity\Admin;
use App\Entity\Player;
use App\Exceptions\AlreadyIsAMemberException;
use App\Exceptions\AlreadyIsInTheClubExpection;
use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase
{
    public function testICantAddAMemberToClubWhenHeIsAlreadyAMember(): void
    {
        $admin = new Admin("Club Ajedrez Puerta Elvira");

        $playerLucas = new Player("Lucas Montes Molina");

        $admin->addPlayerToClub($playerLucas, true);

        $this->expectException(AlreadyIsAMemberException::class);

        $admin->addPlayerToClub($playerLucas);
    }

    public function testICantAddAPlayerToClubWhenHeIsAlreadyInTheClub(): void
    {
        $admin = new Admin("Club Ajedrez Puerta Elvira");

        $playerLucas = new Player("Lucas Montes Molina");

        $admin->addPlayerToClub($playerLucas);

        $this->expectException(AlreadyIsInTheClubExpection::class);

        $admin->addPlayerToClub($playerLucas);
    }

    public function testICanAddAPlayerToTheClub(): void
    {
        $admin = new Admin("Club Ajedrez Puerta Elvira");

        $playerLucas = new Player("Lucas Montes Molina");

        $admin->addPlayerToClub($playerLucas);

        self::assertContains($playerLucas, $admin->getClub()->getPlayers());
        self::assertNotContains($playerLucas, $admin->getClub()->getMembers());
        self::assertSame($playerLucas->getName(), "Lucas Montes Molina");
    }

    public function testICanAddAMemberToTheClub(): void
    {
        $admin = new Admin("Club Ajedrez Puerta Elvira");

        $playerLucas = new Player("Lucas Montes Molina");

        $admin->addPlayerToClub($playerLucas, true);

        self::assertContains($playerLucas, $admin->getClub()->getPlayers());
        self::assertContains($playerLucas, $admin->getClub()->getMembers());
        self::assertSame($playerLucas->getName(), "Lucas Montes Molina");
    }
}