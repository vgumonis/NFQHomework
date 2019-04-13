<?php


namespace Hotel;

class Guest
{

    private $firstName;
    private $lastName;


    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function __toString(): string
    {
        return "Guest with fist name  " . $this->getFirstName() . " and last name " . $this->getLastName() . ".";
    }

}