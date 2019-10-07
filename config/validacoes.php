<?php
    //criar uma array para guardar todos os meus erros.
$erros = [];

function validaNome($nome){

    global $erros;
    //criando funcoes e validacoes.
    if( strlen($nome) == 0){
        //incluir elementos na array.
        array_push($erros, "Preencha o nome corretamente.");

    }
}
function validaCPF($cpf){
    global $erros;
    if(strlen($cpf) != 11){
        array_push($erros, "Preencha o numero do CPF corretamente");
    }
}

?>