<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagemErro'] = "O nome não pode ser vazio";
    header('location: /');
    return;
}
elseif(strlen($nome) < 3){
    $_SESSION['mensagemErro'] = "O nome deve conter mais de 3 caracteres";
    header('location: /');
    return;
}
elseif(strlen($nome) > 40){
    $_SESSION['mensagemErro'] = "O nome é muito extenso";
    header('location: /');
    return;
}

elseif (!is_numeric($idade)) {
    $_SESSION['mensagemErro'] = "Informe um número para a idade";
    header('location: /');
    return;
}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            $_SESSION['mensagemSucesso'] =  "O(a) nadador(a) ".$nome." compete na Categoria Infantil";
            header('location: /');
            return;
        }
    }
}elseif ($idade >=13 && $idade <=18) {
    for($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'juvenil'){
            $_SESSION['mensagemSucesso'] =  "O(a) nadador(a) ".$nome." compete na Categoria Juvenil";
            header('location: /');
            return;
        }
    }
}else{
    for($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'adulto'){
            $_SESSION['mensagemSucesso'] =  "O(a) nadador(a) ".$nome." compete na Categoria Adulto";
            header('location: /');
            return;
        }
    }
}