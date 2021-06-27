<?php

$k=0;
$i=0;
$numeros;

do{
    echo("<br>");
    $k++;
    $numeros = mt_rand(0, 5);
    echo $numeros;


    if($numeros == 3){
        $i++;
    }
    
}
while($k<20);
    echo("<br><br>");
    echo("O valor 3 aparece " . $i . " vez(es).");

?>