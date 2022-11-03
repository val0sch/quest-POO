<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';


// *** Moving bike ***

$lionelBike = new Bicycle("Orange", 2);
echo $lionelBike->forward();
echo '<br> Vitesse du vélo : ' . $lionelBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $lionelBike->brake();
echo '<br> Vitesse du vélo : ' . $lionelBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $lionelBike->brake();

echo "<br>";
echo "<br>";

// *** Moving car ****

$maggieCar = new Car("purple", 8, "electricity");

echo '<br> Vitesse de la voiture : ' . $maggieCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $maggieCar->forward();
echo '<br> Vitesse de la voiture : ' . $maggieCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $maggieCar->brake();
echo '<br> Vitesse de la voiture : ' . $maggieCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $maggieCar->brake();

//voici comment récupérer une constante de classe:
var_dump(Car::ALLOWED_ENERGIES);

echo "<br>";
echo "<br>";


// **** Moving Truck****
$nickTruck = new Truck("yellow", 3, 25, 15);


echo '<br> Vitesse du véhicule : ' . $nickTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $nickTruck->forward();
echo '<br> Vitesse du véhicule: ' . $nickTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $nickTruck->brake();
echo '<br> Vitesse du véhicule : ' . $nickTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $nickTruck->brake();
echo '<br> Volume of the truck: ' . $nickTruck->getVolume() . " " . 'tonnes';
echo '<br> Loading of the truck : ' . $nickTruck->getLoading() . '<br>';


$motorway = new MotorWay(4, 130);
var_dump($motorway);
$pedestrianWay = new PedestrianWay(1, 10);
$residentialWay = new ResidentialWay(2, 50);

var_dump($nickTruck instanceof MotorWay);


// ***************** correction

$truckOne = new Truck('black', 3, 90);
$alfaromeo = new Car('red', 5, 180);
$seatCupra = new Car('green', 4, 400);
$bike = new Bicycle('blue', 12);
$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

echo 'MotorWay : ' . PHP_EOL;
echo $motorWay->addVehicle($alfaromeo) . PHP_EOL;
echo $motorWay->addVehicle($seatCupra) . PHP_EOL;
echo $motorWay->addVehicle($bike) . PHP_EOL;

echo 'ResidentialWay : ';
echo $residentialWay->addVehicle($truckOne) . PHP_EOL;

echo 'PedestrianWay : ';
echo $pedestrianWay->addVehicle($bike) . PHP_EOL;
