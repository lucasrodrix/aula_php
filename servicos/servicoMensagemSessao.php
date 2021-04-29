<?php

session_start();

function setarMensagemErro(string $mensagem):void{
    $_SESSION['mensagemErro'] = $mensagem;
}

function setarMensagemSucesso(string $mensagem):void{
    $_SESSION['mensagemSucesso'] = $mensagem;
}

function obterMensagemErro():?string{
    if(isset($_SESSION['mensagemErro'])){
        return $_SESSION['obterMensagemErro'];
    }
    return null;
}

function obterMensagemSucesso():?string{
    if(isset($_SESSION['mensagemSucesso'])){
        return $_SESSION['obterMensagemSucesso'];
    }
    return null;
}

function removerMensagemErro():void{
    if(isset($_SESSION['mensagemErro'])){
        unset($_SESSION['mensagemErro']);
    }  
}

function removerMensagemSucesso():void{
    if(isset($_SESSION['mensagemSucesso'])){
        unset($_SESSION['mensagemSucesso']);
    }    
}