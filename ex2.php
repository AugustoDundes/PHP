<?php 

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    $valor6 = $_POST['valor6'];
    $valor7 = $_POST['valor7'];

    $menor_valor = $valor1;
    $i = 1;

    if ($valor2 < $menor_valor){
        $menor_valor = $valor2;
        $i = 2;
    }
    elseif ($valor3 < $menor_valor){
        $menor_valor = $valor3;
        $i = 3;
    }
    elseif ($valor4 < $menor_valor){
        $menor_valor = $valor4;
        $i = 4;
    }
    elseif ($valor5 < $menor_valor){
        $menor_valor = $valor5;
        $i = 5;
    }
    elseif ($valor6 < $menor_valor){
        $menor_valor = $valor6;
        $i = 6;
    }
    elseif ($valor7 < $menor_valor){
        $menor_valor = $valor7;
        $i = 7;
    }

    echo "O menor valor é $menor_valor no índice $i!";

    ?>
    <p>
    <form action="index3.php" method="post">
        <label>Ir para atividade 3</label>
        <button type="submit">Atividade 3</button>
    </form>
    </p>
