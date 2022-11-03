<?php
   $palavra = $_POST['palavra'];

   if ($palavra = 'SQL') {
       echo 'Imprimir a palavra' .$palavra.;
   }else if ($palavra = '') {
       echo 'Imprimir a palavra' .$palavra. 'novamente';
   }else {
       echo 'Opção inválida';
   };
   readline();



?>