<?php

$numero1;
$numero2;
$suma;

$numero1=(floatval($_POST['Campo1']));
$numero2=(floatval($_POST['Campo2']));


    if(is_float($numero1) && is_float($numero2)){
        $suma=$numero1+$numero2;
        echo "<script>alert('La suma $numero1 + $numero2 = $suma');</script>";
        echo "<script>window.open('/Sesion_02_03/view/Tipos/flotantes.html','_self')</script>";
    }

?>