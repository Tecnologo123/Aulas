<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$soma = $_POST['soma'];

$soma = ($num1 + $num2);

if ($soma > 20) {
  echo'O resultado é' .$soma. + 8 .'!';
}else if ($soma <= 20 ){
  echo'O resultado é' .$soma. - 5 .'!';
}else {
  echo'Opção inválida';
};
readline();

?>