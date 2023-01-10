<?php
//require_once 'Classes\Database.php';
//require_once 'Classes/Main.php';
//require_once 'Design/Main.php';

#aliasing- to avoid ambiguity
use Classes\Main as CMain;
use Design\Main as DMain;

function loader ($className){
    require_once $className.'.php';
}
 spl_autoload_register('loader'); //php will not throw the error, class autoloading 
$object1= new CMain();
$object2= new DMain();