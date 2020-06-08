<?php
// index.php

require_once 'Car.php';


$car = new Car('tomato',4,'fuel');

try {
      $car->start();
    } catch(Exception $e){
       // on met ParkBrake à false
      $car->setParkBrake();
    } finally{
   	echo "Ma voiture roule comme un donut";
   }

?>
