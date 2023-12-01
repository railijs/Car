<?php

abstract class Vehicle {

    public $brand;
    protected $mileage;
    static $description = "es ripoju";


function __destruct() {
    echo "$this->brand is dead at mileage $this->mileage";
  }

function increaseMileage($amount) {
    $this->mileage = $this->mileage += $amount;
  }

  abstract static function makeNoise();
};
?>