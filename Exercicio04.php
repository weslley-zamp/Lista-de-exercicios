<?php
// Crie uma função que receba um número e retorne se é positivo, negativo ou zero.
function isPos($num){
    if($num > 0){
        echo "Esse número é positivo";
    }
    if($num === 0){
        echo "Esse numero é zero";
    }
    if($num < 0 ){
        echo "Esse numero é negativo";
    }
}
isPos(-5);
?>