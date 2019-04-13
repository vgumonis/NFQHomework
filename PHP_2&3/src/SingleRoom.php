<?php

namespace Hotel;

class SingleRoom extends RoomAbstract
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
        $this->roomType = "Standard";
        $this->roomNumber = 1;
        $this->bedCount = "1";
        $this->restroom = true;
        $this->balcony = false;
        $this->price = 30;
        $this->extras = [
            "TV",
            "air-conditioner",
        ];
    }


    public function getRoomType(): string
    {
        return $this->roomType;
    }


    public function getReservations(): ?array
    {
        return self::$reservations;
    }


    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }


    public function getBedCount(): int
    {
        return $this->bedCount;
    }


    public function getRestroom(): bool
    {
        return $this->restroom;
    }


    public function getBalcony(): bool
    {
        return $this->balcony;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }


    public function getPrice(): int
    {
        return $this->price;
    }


    public function addReservation(Reservation $reservation)
    {
        if (self::$reservations != null) {
            foreach (self::$reservations as $presentReservation) {


                if ($reservation->getStartDate() >= $presentReservation->getStartDate() && $reservation->getStartDate() <= $presentReservation->getEndDate() || $reservation->getEndDate() >= $presentReservation->getStartDate() && $reservation->getEndDate() <= $presentReservation->getEndDate()) {
                    throw new ReservationException;
                }
            }
        }
        self::$reservations  [] = $reservation;
        return array_search($reservation, self::$reservations);
    }

    public function removeReservation(Reservation $reservation)
    {
        $index = array_search($reservation, self::$reservations);
        if ($index !== false) {
            unset(self::$reservations [$index]);
            return true;
        } else {
            return false;
        }
    }

}

