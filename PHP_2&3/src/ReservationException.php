<?php

namespace Hotel;

class ReservationException extends \Exception
{
    public function __toString() :string
    {
        return "Sorry but no rooms are free for your choosen dates ";
    }
}