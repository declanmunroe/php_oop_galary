<?php

function classAutoLoader($class) {
    $class_name = strtolower($class);
    
    $the_path = "includes/{$class_name}.php";
    
    if (is_file($the_path) && !class_exists($class_name)) {
        include $the_path;
    }
}

function redirect($location) {
    header("Location: {$location}");
}

spl_autoload_register('classAutoLoader');
?>

