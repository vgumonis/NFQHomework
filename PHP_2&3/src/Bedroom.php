<?php

namespace Hotel;

class Bedroom extends RoomAbstract
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
        parent::__construct("Gold", 2, 2, true, true, [
            "TV",
            "air-conditioner",
            "refrigerator",
            "mini-bar",
            "bathtub",
        ], 40);
    }
}

