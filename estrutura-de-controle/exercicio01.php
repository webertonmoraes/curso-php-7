<?php
$idade = 75;
$crianca = 12;
$maiorIdade = 18;
$melhorIdade = 65;

if($idade < $crianca){
    echo 'É uma criança';
}elseif($idade < $maiorIdade){
    echo 'Adolecente';
}elseif($idade < $melhorIdade){
    echo 'Aduto';
}else {
    echo 'idoso';
}