<?php

//Pregunta 1 : Boleano

$respuesta1=0;

$respuesta1=$_POST['num1'];

if($respuesta1 > 100){
    echo "<script>alert('El numero $respuesta1 es mayor a 100')</script>";
    echo "<script>window.open('Vista.html','_self')</script>";
}

elseif($respuesta1 < 100){
    echo "<script>alert('El numero $respuesta1 es menor a 100')</script>";
    echo "<script>window.open('Vista.html','_self')</script>";
}

?>