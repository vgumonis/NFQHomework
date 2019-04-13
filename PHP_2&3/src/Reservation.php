<?php

namespace Hotel;

use Hotel\Guest;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(Guest $guest, \DateTime $startDate, \DateTime $endDate)
    {
        $this->guest = $guest;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }


    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }


    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }


    public function getGuest(): Guest
    {
        return $this->guest;
    }

    public function __toString(): string
    {
        return "Reservation made by " . $this->getGuest() . " stated on " . $this->getStartDate()->format('Y-m-d H:i:s') . " and ends " . $this->getEndDate()->format('Y-m-d H:i:s');
    }
}
