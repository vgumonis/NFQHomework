<?php

namespace Hotel;

interface RevervableInterface
{
    public function addReservation(Reservation $reservation) : int;

    public function removeReservation(Reservation $reservation) : bool;
}