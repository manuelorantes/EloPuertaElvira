<?php


namespace App\Entity;

use App\Entity\Player;
use phpDocumentor\Reflection\Types\Collection;

class Group
{
    /**
     * @var Collection
     */
    private $students;
    private $prize;
    private $level;
    private $teacher;

    public function addStudent(Player $student)
    {
        $this->students[] = $student;
    }
}