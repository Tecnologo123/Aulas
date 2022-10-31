<?php

     var $opcao = Number(window.prompt('Escolha uma opção de roupa Masculina: \n 1) \n 2)'))

     switch ($opcao) {
       case '1':
           echo 'O mês de Janeiro se refere ao primero mês do ano';
           break;
       case '2':
           echo 'O mês de Fevereiro se refere ao segundo mês do ano';
           break;
       case '3':
           echo 'O mês de Março se refere ao terceiro mês do ano';
           break;
       case '4':
           echo 'O mês de Abril se refere ao quarto mês do ano';
           break;
       case '5':
           echo 'O mês de Maio se refere ao quinto mês do ano';
           break;
       case '6':
           echo 'O mês de Junho se refere ao sexto mês do ano';
           break;
       case '7':
           echo 'O mês de Julho se refere ao sétimo mês do ano';
           break;
       case '8':
           echo 'O mês de Agosto se refere ao oitavo mês do ano';
           break;
       case '9':
           echo 'O mês de Setembro se refere ao nono mês do ano';
           break;
       case '10':
           echo 'O mês de Outubro se refere ao décimo mês do ano';
           break;
       case '11':
           echo 'O mês de Novembro se refere ao décimo primeiro mês do ano';
           break;
       case '12':
           echo 'O mês de Dezembro se refere ao décimo segundo mês do ano';  
           break;
       default :
           echo 'Não existe mês com este número.';
       
     }



?>