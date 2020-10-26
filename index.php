<?php
// index.php
require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';
require 'PedestrianWay.php';
require 'MotorWay.php';
require 'ResidentialWay.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



// Cars
$car = new Cars('green', 4, 'electric');
echo $car->forward();
var_dump($car);

// Truck

$truck = new truck ('blue',4,'diesel',120);
var_dump($truck);
echo '<br> La capacité du camion est de' . $truck->getCapacity() .'tonne' .'<br>';
echo '<br> Le chargement du camion est de ' . $truck->getLoading() . 'tonne' .'<br>';
echo $truck->loading();
echo '<br> chargement : ' . $truck->getLoading() . 'tonne' . '<br>';
echo $truck->loading();


echo $truck->forward();
echo '<br> Vitesse de la voiture : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse de la voiture : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();


//highWay

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($car);
var_dump($pedestrianWay);


$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($bicycle);
var_dump($pedestrianWay);

$pedestrianWay = new MotorWay();
$pedestrianWay->addVehicle($car);
var_dump($pedestrianWay);

$pedestrianWay = new MotorWay();
$pedestrianWay->addVehicle($truck);
var_dump($pedestrianWay);