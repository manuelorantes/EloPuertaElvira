<?php

namespace App\Entity;

class Player
{
    private string $name;
    private string $surname;
    private boolean $isMinor;
    private ?string $tutor;
    private ?string $direction;
    private ?string $email;
    private string $phoneNumber;
    private boolean $isMember;
    private boolean $isAllowPublishPhotos;
    private boolean $isAllowWhatsApp;

    public function __construct(string $name, string $surname, bool $isMinor, ?string $tutor, boolean $allowPublish, boolean $allowWhatsApp)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->isMinor = $isMinor;
        $this->tutor = $tutor;
        $this->isMember = false;
        $this->isAllowPublishPhotos = $allowPublish;
        $this->isAllowWhatsApp = $allowWhatsApp;
    }

    public function addMember()
    {
        if ($this->isMember === false){
            $this->isMember = true;
        }
        else {
            assert(true == false, 'The player is a member!');
        }
    }

    public function setDirection(?string $direction)
    {
        $this->direction = $direction;
    }

    public function setEmail(?string $email)
    {
        $this->email = $email;
    }

    public function setPhoneNumber(?string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }


}
