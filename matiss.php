<?php
include "Bird.php";
include "Car.php";
include "Tire.php";
include "Train.php";

// $bird1 = new Bird("Matiss", 12);
// echo $bird1->name. "<br>";


// $bird2 = new Bird("Jekabs", 2);
// $bird2->fly();

// $car1 = new Car("Yamaha", 200);
// echo Car::$describe;
// Car::makeNoise();

// $tire1 = new Tire(19.4, "summer", "good");
// echo $tire1->size. "<br>"; 
// echo $tire1->type. "<br>";

$train1 = new Train("Matiss", 2.5, 6000000);

$train1 -> increaseMileage(20000);
Train::makeNoise();

?>