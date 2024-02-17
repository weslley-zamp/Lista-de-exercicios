<?php
function isPangrama($texto){
    $alfabeto = range('a', 'z');
    $texto = strtolower($texto);

    foreach($alfabeto as $letra){
        if(strpos($texto, $letra) === false){
            return false;
        }
    }
    return true;
}

$textao = "hoje a noite, sem luz, decidi xeretar a quinta gaveta de vovo: achei linguica, pao e fuba, w k y";

if(isPangrama($textao)){
    echo "É um pangrama";
}
else{
    echo "Não é um pangrama";
}
?>