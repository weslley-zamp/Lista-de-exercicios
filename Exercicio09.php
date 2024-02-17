<?php
$termos = 10;

$termo1 = 0;
$termo2 = 1;

echo $termo1. " ". $termo2. " ";

for($i = 2; $i < $termos; $i++){
    $proxTermo = $termo1 + $termo2;
    echo $proxTermo. " ";

    $termo1 = $termo2;
    $termo2 = $proxTermo;
}
?>