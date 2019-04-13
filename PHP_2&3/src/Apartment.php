<?php

namespace Hotel;


class Apartment extends Room
{

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

