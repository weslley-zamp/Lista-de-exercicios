<?php
function retornaNumero($num){
    if($num > 0){
        echo "O numero é positivo";
    }
    if($num < 0){
        echo "O numero é negativo";
    }
    if ($num === 0){
        echo "O numero é igual a 0";
    }
}
retornaNumero(-2)
?>