<?php

function defineCategoriaCompetidor(string $nome, string $idade):?string{

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'juvenil';
    $categorias[] = 'adulto';

    if(validaNome($nome) && validaIdade($idade)){
        removerMensagemErro();
        if($idade >= 6 && $idade <= 12){
            for($i = 0; $i < count($categorias); $i++){
                if ($categorias[$i] == 'infantil'){
                    setarMensagemSucesso(mensagem: "O(a) nadador(a) ".$nome." compete na Categoria Infantil");
                    return null;
                }
            }
        }elseif ($idade >=13 && $idade <=18) {
            for($i = 0; $i < count($categorias); $i++){
                if ($categorias[$i] == 'juvenil'){
                    setarMensagemSucesso(mensagem: "O(a) nadador(a) ".$nome." compete na Categoria Juvenil");
                    return null;
                }
            }
        }else{
            for($i = 0; $i < count($categorias); $i++){
                if ($categorias[$i] == 'adulto'){
                    setarMensagemSucesso(mensagem: "O(a) nadador(a) ".$nome." compete na Categoria Adulto");
                    return null;
                }
            }
        }
    }else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}