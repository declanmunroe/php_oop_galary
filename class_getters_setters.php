<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cars {
    private $wheel_count = 4; //private means that this property is only available to us within this class
    
    function get_values() {
        echo $this->wheel_count; // $this ic called a sudo varialble and refers to the class it is in hence the name $this
    }
    
    function set_values() {
        $this->wheel_count = 10;
    }
}

$bmw = new Cars();

$bmw->set_values();
$bmw->get_values();

/*
 * This is an example of using getters and setters in php oop, this way we can information that is in a private property/modifier
 * This way we can controll our programs flow alot better and we can keep things private
 */

