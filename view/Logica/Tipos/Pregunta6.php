<?php

function gen(): iterable {
    yield 3;
    yield 2;
    yield 1;
}

$gen = gen();

foreach ($gen as $v) {
    echo "<script>alert('El numero iterable es: $v');</script>";
    echo "<script>window.open('/Sesion_02_03/view/Tipos/iterables.html','_self')</script>";
}

?>