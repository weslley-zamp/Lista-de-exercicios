<?php
function isPalindromo($palavra){
    $palavraInvertida = strrev($palavra);
    return strtolower($palavra) === strtolower($palavraInvertida);
}
$teste = "Radar";
if(isPalindromo($teste)){
    echo "$teste é um Palindromo";
}
else{
    echo "$teste não é um Palindromo";
}
?>