<?php

//Pregunta 1 : Boleano

$respuesta1=0;

$respuesta1=$_POST['Pregunta1'];

if($respuesta1=="False"){
    echo "<script>alert('La respuesta es incorrecta')</script>";
    echo "<script>window.open('/Sesion_02_03/view/Tipos/boleanos.html','_self')</script>";
}

elseif($respuesta1=="True"){
    echo "<script>alert('La respuesta es correcta')</script>";
    echo "<script>window.open('/Sesion_02_03/view/Tipos/boleanos.html','_self')</script>";
}

?>