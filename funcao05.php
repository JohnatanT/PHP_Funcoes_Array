<?php

//Ordenação de Vetores:

//Para ordenar os vetores usamos a função sort(vetor);
$v = array(5,3,9,8,4);
sort($v);
print_r($v);

//Ordenar de forma reversa rsort(vetor);
rsort($v);
print_r($v);

//Ordenação Associativa
//Vai ordenar os valores e eles permanecerão com seus indices
//Função asort(vetor);
asort($v);
print_r($v);

//Ordenação Associativa Reversa
//Função arsort(vetor);
arsort($v);
print_r($v);

//Ordenação das chaves
//Função ksort($vetor);
$a = array(2=>6,7=>5,4=>9,0=>2);
ksort($a);
print_r($a);

//Ordenação Reversa das chaves
//Função krsort(vetor);
krsort($a);
print_r($a);
