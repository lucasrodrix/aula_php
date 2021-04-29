<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            echo "O(a) nadador(a) ".$nome." compete na Categoria Infantil";
        }
    }
}elseif ($idade >=13 && $idade <=18) {
    for($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'juvenil'){
            echo "O(a) nadador(a) ".$nome." compete na Categoria Juvenil";
        }
    }
}else{
    for($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'adulto'){
            echo "O(a) nadador(a) ".$nome." compete na Categoria Adulto";
        }
    }
}