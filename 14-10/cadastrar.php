<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    
    if ($idade >= 18){
        echo 'Cadastro realizado com Sucesso!';
    }else{
        echo 'Você não pode se cadastrar nesse site';
    }

    ?>