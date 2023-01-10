<?php
function loader($className){
    //user
    //quote
    require_once $className.".php";
}
spl_autoload_register("loader");