<?php

    $valor = $_POST['valor'];
    $fat = $valor;
    $i = $valor;

    while ($i != 1){
        $valor = $valor * ($fat - 1);
        $fat = $fat -1;
        $i = $i - 1;
    }

    echo $valor;