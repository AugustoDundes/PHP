<?php

    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    $soma = $num1 + $num2;
    
    if ($num1 == $num2){
        $soma = $soma * 3;
    }

    echo "A soma dos valores é de: $soma";
    ?>

<p>
<form action="index4.php" method="post">
        <button type="submit">Atividade 4</button>
    </form>

    </p>