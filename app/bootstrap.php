<?php
//Load config
require_once '../app/config/config.php';


//Load libraries
// require_once '../app/libraries/Core.php';
// require_once '../app/libraries/Database.php';
// require_once '../app/libraries/Controller.php';

//Autoload Core Libraries
spl_autoload_register(function($className){
    require_once '../app/libraries/' .$className. '.php';

});
