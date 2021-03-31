<?php

 require_once("ClassOperacion.php");

  $operacion1 = new Operacion(10,13);
  $operacion2 = new Operacion(100,50);

    $totalsuma = $operacion1-> getsuma();
    echo "total suma: " .  $totalsuma;
    echo "<br>";

    $totalresta = $operacion1->getresta();
    echo "total resta: " .  $totalresta;
    echo "<br>";

    $totalmultiplicacion = $operacion1->getmultiplicacion();
    echo "total multiplicacion: " . $totalmultiplicacion;
    echo "<br>";

    $totaldivicion = $operacion1->getdivicion();
    echo "total divicion: " . $totaldivicion;
    echo "<br><br>";

    $totalsuma = $operacion2-> getsuma();
    echo "total suma: " .  $totalsuma;
    echo "<br>";

    $totalresta = $operacion2->getresta();
    echo "total resta: " .  $totalresta;
    echo "<br>";

    $totalmultiplicacion = $operacion2->getmultiplicacion();
    echo "total multiplicacion: " . $totalmultiplicacion;
    echo "<br>";

    $totaldivicion = $operacion2->getdivicion();
    echo "total divicion: " . $totaldivicion;
    echo "<br>";
?>
