<?php

require 'Vehicle.php';

class Car extends Vehicle
{




}

$peugeot = new Car('');
$peugeot->setNumberOfWheels(4);
$peugeot->setNumberOfSeats(7);
$peugeot->setColor('red');
$peugeot->setBrand('Peugeot');
$peugeot->stop(true);
$peugeot->start(false);

echo "<pre>";
var_dump($peugeot);
echo "</pre>";