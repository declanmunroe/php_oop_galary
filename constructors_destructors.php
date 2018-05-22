<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cars {
    public $door_count = 4; //public means that this propertie will be available to us throughout this entire class
    
    function __construct() { // This methos gets called automaticly when we instantiate our class below  
        echo $this->door_count;
    }
    
}

$bmw = new Cars();


