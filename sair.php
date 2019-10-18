<?php

    //recupara a sessão
    session_start();
    //deslogando usuario
    session_destroy();

    //para voltar para a home
    header('Location:index.php');

?>