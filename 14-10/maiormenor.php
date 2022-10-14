<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2){
         echo 'O numero' .$num1. 'é maior';
    }elseif($num2 > $num1){
        echo 'O numero' .$num2. 'é maior'; 
    }else{
        echo 'Os dois número são iguais.';
    }
?>