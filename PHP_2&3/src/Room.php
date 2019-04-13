<?php

namespace Hotel;

use Hotel\Models\Interfaces\Revervable;

abstract class Room implements Revervable
{
    private $roomType;
    private static $reservations;
    private $roomNumber;
    private $bedCount;
    private $restroom;
    private $balcony;
    private $extras;
    private $price;

    public function __construct(
        string $roomType,
        int $roomNumber,
        int $bedCount,
        bool $restroom,
        bool $balcony,
        array $extras,
        int $price
    ) {
        $this->roomType = $roomType;
        $this->roomNumber = $roomNumber;
        $this->bedCount = $bedCount;
        $this->restroom = $restroom;
        $this->balcony = $balcony;
        $this->extras = $extras;
        $this->price = $price;
    }


    public function getRoomType(): string
    {
        return $this->roomType;
    }

    public function getReservations(): ?array
    {
        return self::$reservations[$this->getRoomType()];
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

    public function addReservation(Reservation $reservation): int
    {
        if (isset(self::$reservations[$this->getRoomType()]) ) {
            foreach (self::$reservations[$this->getRoomType()] as $presentReservation) {

                if ($this->canReserve($reservation, $presentReservation)) {
                    throw new ReservationException;
                }
            }
        }
        self::$reservations [$this->getRoomType()][] = $reservation;
        return array_search($reservation, self::$reservations[$this->getRoomType()]);
    }

    public function removeReservation(Reservation $reservation): bool
    {
        $index = array_search($reservation, self::$reservations[$this->getRoomType()]);
        if ($index !== false) {
            unset(self::$reservations[$this->getRoomType()] [$index]);
            return true;
        }
            return false;
    }

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

    private function canReserve(Reservation $newReservation, Reservation $presentReservation)
    {
        if ($newReservation->getStartDate() >= $presentReservation->getStartDate() && $newReservation->getStartDate() <= $presentReservation->getEndDate() || $newReservation->getEndDate() >= $presentReservation->getStartDate() && $newReservation->getEndDate() <= $presentReservation->getEndDate()) {
            return true;
        }
        return false;
    }
}

