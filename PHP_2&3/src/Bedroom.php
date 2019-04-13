<?php

namespace Hotel;


class Bedroom extends Room
{

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

