<?php

namespace Hotel;

class Apartment extends RoomAbstract
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
        parent::__construct("Diamond", 3, 4, true, true, [
            "TV",
            "air-conditioner",
            "refrigerator",
            "kitchen box",
            "mini-bar",
            "bathtub",
            "Wi-fi"
        ], 50);
    }
}

