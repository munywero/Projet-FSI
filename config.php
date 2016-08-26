<?php

//function to autoload other classes
function autoload_classes($class) {

    $filename = 'controlleurs/HomeController.php';
    if (file_exists('controlleurs/' . $class . '.php')) {
        $filename = 'controlleurs/' . $class . '.php';
    } else if (file_exists('donnees/' . $class . '.php')) {
        $filename = 'donnees/' . $class . '.php';
    } else {
        $filename = 'controlleurs/HomeController.php';
    }    
    require_once $filename;
}

//registering th eautoload function
spl_autoload_register('autoload_classes');

//creating a global instance of PDO
$db = new PDO("mysql:host=localhost;dbname=dbarct", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
