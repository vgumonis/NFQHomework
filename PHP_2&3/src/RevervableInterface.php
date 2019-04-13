<?php

namespace Hotel;

interface RevervableInterface
{

    public function addReservation(Reservation $reservation);

    public function removeReservation(Reservation $reservation);

}