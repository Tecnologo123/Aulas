<?php
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $num_par_impar = $_POST['num_par_impar'];

    $opcao = $_POST['opcao'];

    switch ($opcao) {
        case '1':
             calcular_idade($nome,$ano);
            break;
        case '2':
            calcular_media($nota1,$nota2);
            break;
        case '3':
            verificar_numero_maior($num1,$num2); 
            break;
        case '4':
             verificar_par_impar($num_par_impar);
            break;
        default:
            echo 'opção inválida!';
            break;
    }

?>

<?php
    function calcular_idade($nome,$ano){
        $ano_atual = date("Y");
        $idade = $ano_atual - $ano;
        echo $nome. 'A sua idade é' .$idade;
    };

    function calcular_media($nota1,$nota2){
        $media = ($nota1+$nota2)/2;
        if ($media < 7) {
            echo'A sua média é ruim';
        }else {
            echo'A sua média é boa'; 
        }
    };

    function verificar_numero_maior($num1,$num2){
        if ($num1 > $num2){
            echo 'O numero' .$num1. 'é maior';
       }elseif($num2 > $num1){
           echo 'O numero' .$num2. 'é maior'; 
       }else{
           echo 'Os dois número são iguais.';
       };

    };

        function verificar_par_impar($num_par_impar){
            if ($num_par_impar %2 == 0) {
                echo 'Par!';
            }else {
                echo 'Impar!';
            }

        };
        
?>