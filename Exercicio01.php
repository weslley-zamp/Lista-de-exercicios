<?php
//Substituir todas as vogais por *

$string = "Manipulacao de Strings";
echo str_replace(["a","e","i","o","u","A","E","I","O","U"],"*", $string);

//verificar se um número é primo
function isPrimo($num){
    for($i=2; $i < $num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}

$numero = 19;
if(isprimo($numero)){
    echo "<br/>$numero é um numero primo";
}
else{
    echo "\n$numero não é um numero primo";
}
?>