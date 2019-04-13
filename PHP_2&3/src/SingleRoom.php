<?php

namespace Hotel;


class SingleRoom extends Room
{

    public function __construct()
    {
        parent::__construct("Standard", 1, 1, true, false, [
            "TV",
            "air-conditioner",
        ], 30);
    }
}

