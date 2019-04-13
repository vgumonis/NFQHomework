<?php

namespace Hotel;

use Hotel\ReservationException;

class RoomAbstract implements RevervableInterface
{

    private $roomType;
    private static $reservations;
    private $roomNumber;
    private $bedCount;
    private $restroom;
    private $balcony;
    private $extras;
    private $price;


    public function __toString()
    {
        $info = [];

        $info[] = $this->getRoomType() . " has";
        $info[] = $this->getRoomNumber() . " rooms";
        $info[] = $this->getBedCount() . " beds";
        $info[] = $this->getRestroom() ? " has a restroom" : " has no restroom";
        $info[] = $this->getBalcony() ? " has a balcony" : " has no balcony";
        $info[] = " has extras:" . implode(" and ", $this->getExtras());
        $info[] = " and costs " . $this->getPrice() . " Euros per night";
        $info[] = implode(" and ", $this->getReservations());

        return implode(" ", $info);
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