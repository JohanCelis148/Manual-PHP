<?php
    $day[0]="domingo";
	$day[1]="lunes";
	$day[2]="martes";
	$day[3]="miercoles";
	$day[4]="jueves";
	$day[5]="viernes";
	$day[6]="sabado";

    $dayNumber=date($_POST['Campo1']);

    if ($dayNumber <= 6){
        echo "<script>alert('Hoy es: $day[$dayNumber]');</script>";
        echo "<script>window.open('/Sesion_02_03/view/Tipos/arrays.html','_self')</script>";
    }

    else if ($dayNumber > 6){
        echo "<script>alert('El numero ingresado no es correcto');</script>";
        echo "<script>window.open('/Sesion_02_03/view/Tipos/arrays.html','_self')</script>";
    }

?>