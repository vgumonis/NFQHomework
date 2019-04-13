<?php

require "vendor/autoload.php";

$room1 = new \Hotel\Apartment();


$petras = new \Hotel\Guest("petras", "petraitis");

$reservation1start = new DateTime('2019-10-01T15:03:01.012345Z');

$reservation1end = new DateTime('2019-10-05T15:03:01.012345Z');

$reservation1 = new \Hotel\Reservation($petras, $reservation1start, $reservation1end);

\Hotel\BookingManager::bookRoom($room1, $reservation1);


$room2 = new \Hotel\Apartment();

$petras = new \Hotel\Guest("antanas", "petraitis");

$reservation2start = new DateTime('2019-10-09T15:03:01.012345Z');

$reservation2end = new DateTime('2019-10-15T15:03:01.012345Z');

$reservation2 = new \Hotel\Reservation($petras, $reservation2start, $reservation2end);

\Hotel\BookingManager::bookRoom($room2, $reservation2);


$room3 = new \Hotel\Bedroom();

$petras = new \Hotel\Guest("petras", "petraitis");

$reservation3start = new DateTime('2019-10-09T15:03:01.012345Z');

$reservation3end = new DateTime('2019-10-15T15:03:01.012345Z');

$reservation3 = new \Hotel\Reservation($petras, $reservation3start, $reservation3end);

\Hotel\BookingManager::bookRoom($room3, $reservation3);


$room4 = new \Hotel\Bedroom();

$petras = new \Hotel\Guest("antanas", "petraitis");

$reservation4start = new DateTime('2019-10-09T15:03:01.012345Z');

$reservation4end = new DateTime('2019-10-15T15:03:01.012345Z');

$reservation4 = new \Hotel\Reservation($petras, $reservation4start, $reservation4end);

\Hotel\BookingManager::bookRoom($room4, $reservation4);


//var_dump($room2->getReservations());

echo $room2->removeReservation($reservation2);



