<?php
$open = fopen("C:\\teste.txt","w");//pode ver os par�metros do fopen no php.net
$quebra = chr(13).chr(10);//essa � a quebra de linha
fwrite($open,"Primeira Linha".$quebra);
fwrite($open,"Segunda Linha".$quebra);
fwrite($open,"Terceira Linha".chr(13).chr(10));
fclose($open);


?>

http://www.scriptbrasil.com.br/forum/lofiversion/index.php/t69736.html
