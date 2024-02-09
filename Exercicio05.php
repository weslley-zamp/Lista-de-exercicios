<?php
// Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.

$frase = "A vida é uma maravilha";
$numberWord = str_word_count($frase);
$palavra = explode(" ",$frase);

for($i = 0,  $count = count($palavra); $i < $count;$i++){
    echo "<br/> $palavra[$i]";
}
?>