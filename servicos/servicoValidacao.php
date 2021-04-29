<?php

function validaNome(string $nome){
    if(empty($nome)){
        $_SESSION['mensagemErro'] = "O nome não pode ser vazio";
        return false;
    }
    elseif(strlen($nome) < 3){
        $_SESSION['mensagemErro'] = "O nome deve conter mais de 3 caracteres";
        return false;
    }
    elseif(strlen($nome) > 40){
        $_SESSION['mensagemErro'] = "O nome é muito extenso";
        return false;
    }
    return true;
}

function validaIdade(string $idade){
    if (!is_numeric($idade)) {
        $_SESSION['mensagemErro'] = "Informe um número para a idade";
        return false;
    }
    return true;
}