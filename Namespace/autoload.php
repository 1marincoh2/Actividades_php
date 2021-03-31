<?php

function autoload($class){
    //  echo $class;
    $url ="".str_replace("\\","/",$class.".php");
    echo $url.'<br>';
    require_once ($url);

}
spl_autoload_register('autoload')

?>
