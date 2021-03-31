<?php
require_once ("ClassUsuario.php");

    $objUsuarioUno = new Usuario("jose marin","jose@inf.com","admin");

    $objAlina = new Usuario("Alina marin","alinamarin@inf.com","admin");

    echo $objUsuarioUno ->getPerfil()."<br><br>";

    echo $objAlina ->getPerfil()."<br><br>";

    $objAlina->setCambiarClave("23092014");
     echo $objAlina ->getPerfil()."<br>";

    ?>