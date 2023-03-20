<?php

    include('../Modelo/SumaM.php');

    $metodo = $_POST['btnEnviar'];
    
    if (isset($metodo)) {
        
        switch ($metodo) {
            case 'sumar':
                $sumar = new Sumar();
                $sumar-> setNum1($_POST['num1']);
                $sumar-> setNum2($_POST['num2']);
                $sumar-> CalcularSuma();
            break;
        }
    }

?>