<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cars {
    public $door_count = 4; //public means that this propertie will be available to us throughout this entire class
    private $wheel_count = 4; //private means that this property is only available to us within this class
    protected $seat_count = 2; //protected means that this property is only available inside this class and sub class for example when we extend a class
    
    function car_details() {
        return $this->door_count; // $this ic called a sudo varialble and refers to the class it is in hence the name $this
    }
    
}

$bmw = new Cars();
$audi = new Cars();
echo $bmw->door_count = 10;
echo $audi->door_count;

echo $audi->car_details();

class Truck extends Cars { // extends takes the properties and methods from the Cars class so we can access them in the Truck class we have now created
    
}

$scania = new Truck();
echo $scania->door_count;

$car_info = new Cars();
echo $car_info->car_details();
//echo $car_info->wheel_count; wheel_count and seat_count will not print out but throgh an error as they are only available inside the class
//echo $car_info->seat_count;
