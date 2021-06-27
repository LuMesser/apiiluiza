<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<?php

$i = 0;
$posicao=0;
$k=0;
$menor=11;
$numeros = array();
while($k<5){
    $valores = mt_rand(0, 10);
    array_push($numeros, $valores);
    $k++;
    echo("<br>");
    echo($valores);
}
echo("<br>");
echo("<br>");
foreach($numeros as $key => $umNumero){
    if($umNumero < $menor){
        $menor = $umNumero;
        $posicao = $key;
    }
    $i++;
}

echo("O menor elemento é " . $menor . ".");
echo("<br>");
echo("O menor valor está na posição " . $posicao . ".");
?>

</html>