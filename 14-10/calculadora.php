<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $opcao = $_POST['opção'];

    switch ($opcao) {
        case 1 :
             $resultado = $num1 + $num2;
             echo 'O resultado da soma é ' .$resultado;
             break;
        case 2 :
            $resultado = $num1 - $num2;
            echo 'O resultado da subtração é ' .$resultado;
            break;
        case 3 :
            $resultado = $num1 * $num2;
            echo 'O resultado da multiplicação é ' .$resultado;
            break;
        case 4 :
            $resultado = $num1 / $num2;
            echo 'O resultado da divisão é ' .$resultado;
            break;
        default :
            echo 'Opção inválida';
        break;
    }

?>