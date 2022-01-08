<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

$texto = $_POST[1]. '#' . $_POST[2]. '#'. $_POST[3].'#' . $_POST[4] . PHP_EOL;


$arquivo = fopen('salvando.txt','a');

fwrite($arquivo,$texto);

fclose($arquivo);

header('location:questionario.php');
?>