<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cars {
    static $wheel_count = 4; 
    
    static function car_details() {
        return self::$wheel_count; 
    }
    
}

class Trucks extends Cars {
    static function display() {
        echo parent::car_details(); 
        /* 
         * Instead of parent i can write Cars because in the Trucks class we extent the Cars class 
         * so I have access to all the properties and methods in the Cars class 
         * but I can write parent instead because the class Cars is the parent class of Trucks
         */
    }
}

Trucks::display();






