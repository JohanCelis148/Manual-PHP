<?php

    $campo1;
    $resultado;

    $campo1=($_POST['Campo1']);



    $resultado=$campo1;
    echo "<script>alert('La cadena de caracteres ingresada es : $resultado');</script>";
    echo "<script>window.open('/Sesion_02_03/view/Tipos/caracteres.html','_self')</script>";
    

?>