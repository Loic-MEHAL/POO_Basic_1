<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('red');
$bike->setCurrentSpeed(15);


echo 'Le vélo : ' .$bike->getColor(). '<br>';
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

$ford = new Car('blue', 4, 'Gazoline');

echo 'La voiture : ' .$ford->getColor(). '<br>';
echo $ford->forward();
echo $ford->moreFast();
echo '<br> Vitesse de la voiture : ' . $ford->getCurrentSpeed() . ' km/h' . '<br>';
echo $ford->brake();
echo '<br> Vitesse de la voiture : ' . $ford->getCurrentSpeed() . ' km/h' . '<br>';

 ?>
