<?php

$num = $_POST['num'];

if ($num % 10 == 0) {
    echo'O número' .$num. 'é divisível por 10';
}else if ($num % 5 == 0) {
    echo'O número' .$num. 'é divisível por 5'; 
}else if ($num % 2 == 0) {
    echo'O número' .$num. 'é divisível por 2';
}else {
    echo'O número' .$num. 'não é divisível por nenhum dos números anteriores';
};
readline();

?>