<?php
//Inverter uma string sem usar a função strrev
$string = "Carro";
$invertida = "";

for($i = strlen($string) - 1; $i >=0; $i--){
    $invertida .= $string[$i];
}
echo "<br/> $invertida";
?>