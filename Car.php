<?php
include_once "Vehicle.php";

class Car extends Vehicle{
    
    static $describe = "ripo normali.";

    public function __construct($b, $m) {
         $this->brand = $b;
         $this->mileage = $m;
    } 


    static function makeNoise() {
        echo "Beep, Beep, GANG";
    }
}