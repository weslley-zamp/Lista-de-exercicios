<?php
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
    echo "$numero é um numero primo"."<br/>";
}
else{
    echo "\n$numero não é um numero primo";
}
?>