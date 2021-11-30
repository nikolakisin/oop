<?php

require 'Vehicle.php';

class Truck extends Vehicle
{

}

$man = new Truck();

$man->setBrand('Man');
$man->setColor('Blue');
$man->setNumberOfSeats(2);
$man->setNumberOfWheels(10);
$man->start(true);
$man->stop(false);

echo "<pre>";
var_dump($man);
echo "</pre>";

