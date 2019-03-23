<?php

declare(strict_types=1);

namespace Nfq\Akademija\Strict {

    function calculateHomeWorkSum(int ...$numbers): int
    {
        $sum = 0;

        foreach ($numbers as $number) {
            $sum += $number;
        }

        return $sum;
    }   
}

