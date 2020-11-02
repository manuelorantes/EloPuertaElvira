<?php

namespace App\Entity;

class Teacher
{
    private $name;

    /** @var Group[] */
    private $groups = [];


    public function __construct(string $name = 'Nuevo profesor', array $initialGroups = [])
    {
        $this->name = $name;

        foreach ($initialGroups as $group){
            $this->addGruop($group);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    public function addGroup(Group $group)
    {
        $this->groups[] = $group;
    }
}
