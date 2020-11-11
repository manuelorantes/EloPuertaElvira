<?php


namespace App\Entity;


class Group
{

    private array $players = [];
    private int $prize;

    public const LOW = 'initiation';
    public const NORMAL = 'medium';
    public const HIGH = 'advance';
    public const EPIC = 'highest';
    public const GROUP_LEVELS = [
        self::LOW,
        self::NORMAL,
        self::HIGH,
        self::EPIC,
    ];

    public function addStudent(Player $player) :void
    {
        $this->players[] = $player;
    }
}