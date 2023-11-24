<?php

class Car {
    public $brand;
    private $mileage;

    public function __construct($b, $m) {
         $this->brand = $b;
         $this->milage = $m;
    } 

    public function drive() {
        echo " fly " . $this->brand;
    }
}