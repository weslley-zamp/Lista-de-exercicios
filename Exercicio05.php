<?php
$texto = "A vida e uma maravilha";
$palavras = explode(" ", $texto);

for($i = 0; $i<count($palavras); $i++){
    echo $palavras[$i],"<br/>";
}
?>