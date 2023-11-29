<?php

class Car {
    public $brand;
    private $mileage;
    static $describe = "ripo normali.";

    public function __construct($b, $m) {
         $this->brand = $b;
         $this->milage = $m;
    } 

    public function drive() {
        echo " fly " . $this->brand;
    }

    static function makeNoise() {
        echo "Beep, Beep, GANG";
    }
}