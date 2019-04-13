<?php

namespace Hotel;

class SingleRoom extends RoomAbstract
{
    private $roomType;
    private static $reservations;
    private $roomNumber;
    private $bedCount;
    private $restroom;
    private $balcony;
    private $price;
    private $extras;

    public function __construct()
    {
        parent::__construct("Standard", 1, 1, true, false, [
            "TV",
            "air-conditioner",
        ], 30);
    }

}

