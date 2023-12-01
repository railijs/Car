<?php
include_once "Vehicle.php";

class Train extends Vehicle{
public $trackGauge;

    public function __construct( $b, $t, $m) {
      $this->brand = $b;
      $this->trackGauge = $t;
      $this->mileage = $m;
    }
      

      static function makeNoise() {
        echo "Choo! Choo!";
    } 
}