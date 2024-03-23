<?php

    $valor = $_POST['valor1'];

    if ($valor > 0){
        echo ("O número $valor é postivo!");
        
    }
    elseif ($valor == 0){
            echo ("O número $valor é igual a zero!");
    }

    else {
            echo ("O número $valor é negativo!");
    }

    ?>

<p>
    <form action="index2.php" method="post">
        <label>Ir para atividade 2</label>
        <button type="submit">Atividade 2</button>
    </form>
</p>