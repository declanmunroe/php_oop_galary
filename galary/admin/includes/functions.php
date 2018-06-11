<?php

function __autoload($class) {
    $class_name = strtolower($class);
    
    $the_path = "includes/{$class_name}.php";
    
    if (file_exists($the_path)) {
        require_once($the_path);
    }
    else {
        die("The file names {$class_name}.php was not found");
    }
}
?>

