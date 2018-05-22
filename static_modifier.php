<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cars {
    static $door_count = 4; 
    static $wheel_count = 4; 
    static $seat_count = 4; 
    
    static function car_details() {
        echo Cars::$wheel_count; 
        echo Cars::$door_count; 
        echo Cars::$seat_count; 
    }
    
}

echo Cars::$wheel_count;

echo Cars::car_details();

/*
 * This is an example of a static modifier
 * We are not passing the class into a variable i.e instanciating and in static modifiers we dont use $this
 */





