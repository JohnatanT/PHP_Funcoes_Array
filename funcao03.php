<?php

$v = array("b","k","j","c");
print_r($v);
//Para colocar um indice no final do vetor basta por [] vazio.
$v[] = "o";
print_r($v);
//Também pode-se usar a função array_push(vetor,valor);
array_push($v,7);
print_r($v);
//Para eliminar o ultimo indice do meu vetor pode-se usar a função array_pop(vetor)
array_pop($v);
print_r($v);