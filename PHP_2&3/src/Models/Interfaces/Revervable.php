<?php

namespace Hotel\Models\Interfaces;

use Hotel\Reservation;

interface Revervable
{
    public function addReservation(Reservation $reservation) : int;

    public function removeReservation(Reservation $reservation) : bool;
}