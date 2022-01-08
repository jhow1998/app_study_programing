<?php

require ('salvando_resultado.php');

$fh = fopen('salvando.txt', 'a');
fwrite($fh,"$texto");
fclose($fh);

unlink('salvando.txt');

$fh = fopen('salvando.txt', 'a');
fwrite($fh,"$texto");
fclose($fh);


?>