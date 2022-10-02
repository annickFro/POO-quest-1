<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php' ;

define('RETOUR_A_LA_LIGNE', "<br>");

// bikes ---------------------------
$bike = new Bicycle ("rouge", 0, 1, 2) ;
var_dump($bike) ;

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$secondBike = new Bicycle("jaune", 0, 1, 3);
var_dump($secondBike) ;

echo $secondBike->getColor() . RETOUR_A_LA_LIGNE;
echo $secondBike->getCurrentSpeed(). RETOUR_A_LA_LIGNE;
echo $secondBike->getNbSeats(). RETOUR_A_LA_LIGNE;
echo $secondBike->getNbWheels(). RETOUR_A_LA_LIGNE;

// cars ---------------------------

$car = new Car("Vert", 5, "SP98");
var_dump($car) ;

echo $car->start() . RETOUR_A_LA_LIGNE;
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake() . RETOUR_A_LA_LIGNE;

echo $car->getColor() . RETOUR_A_LA_LIGNE;
echo $car->getCurrentSpeed(). RETOUR_A_LA_LIGNE;
echo $car->getNbSeats(). RETOUR_A_LA_LIGNE;
echo $car->getNbWheels(). RETOUR_A_LA_LIGNE;
echo $car->getEnergy(). RETOUR_A_LA_LIGNE;
echo $car->getEnergyLevel(). RETOUR_A_LA_LIGNE;

$car2 = new Car("Noir", 2, "GPL");
var_dump($car) ;