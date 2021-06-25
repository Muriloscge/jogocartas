<?php 

function sortear($num){
    $cartas = array();
    for ($x = 0; $x < $num; $x++){
        $n = rand(1,13);
        // Verificar se o número já existe no array cartas
        // Como? Verificar se o valor n já existe dentro do array cartas
        $cartas[] = $n;
    }
    sort($cartas);
    return $cartas;   
}

?>