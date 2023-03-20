<?php
    // Nuestro cierre
    $doble = function($a) {
        return $a * 2;
    };

    // Este es nuestro rango de números
    $números = range(1, 5);

    // Usar el cierre como llamada de retorno para
    // doblar el valor de cada elemento de nuestro
    // rango
    $números_nuevos = array_map($doble, $números);

    print implode(' ', $números_nuevos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Sesion_02_03/view/Tipos/llamadasretorno.html">
        <br>
        <input type="submit" value="Volver">
    </form>
</body>
</html>