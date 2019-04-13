<?php

namespace Hotel;

use Hotel\Models\Room;

class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        try {
            $roomId = $room->addReservation($reservation);
            echo "Reservation succesfull! Your room is number is " . $roomId . "!\n";

        } catch (\Exception $reservationExeption) {

            echo $reservationExeption . "!\n";
        }
    }

    public function __toString(): string
    {
        return "Booking Manger Class at your service";
    }

}
