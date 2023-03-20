<?php

$numero1;
$numero2;
$suma;
$resta;
$opcion;

$numero1=(intval($_POST['Campo1']));
$numero2=(intval($_POST['Campo2']));
$opcion=$_POST['opcion'];


if($opcion=="Suma"){
    if(is_integer($numero1) && is_integer($numero2)){
        $suma=$numero1+$numero2;
        echo "<script>alert('La suma $numero1 + $numero2 = $suma');</script>";
        echo "<script>window.open('/Sesion_02_03/view/Tipos/enteros.html','_self')</script>";
    }
}

if($opcion=="Resta"){
    if(is_integer($numero1) && is_integer($numero2)){
        $resta=$numero1-$numero2;
        echo "<script>alert('La resta $numero1 - $numero2 = $resta');</script>";
        echo "<script>window.open('/Sesion_02_03/view/Tipos/enteros.html','_self')</script>";
    }
}

?>