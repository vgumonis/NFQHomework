<?php

namespace Hotel;

use Hotel\Models\Room;

class SingleRoom extends Room
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

