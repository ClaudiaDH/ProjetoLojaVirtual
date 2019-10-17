<?php 
    //precisa inicializar toda vez que usarmos as informacoes da sessao.
    session_start();
    $nomeSistema = "Cursos Digitais";
    $usuario = isset($_SESSION['usuario'])? $_SESSION['usuario']: [];
    
    //pegar o arquivo e colocar dentro da variavel
    $nomeArquivo = "produto.json";

    //abrir o arquivo
    //maneira mais resumida
    //transformar em uma array
    //$arquivo = file_get_contents($nomeArquivo);
    //$produtos = json_decode($arquivo,true);
    $produtos = json_decode(file_get_contents($nomeArquivo), true);

    //Cada array tera informacoes de cada produto.
    //Array de posicao com array associativa.
    //$produtos= [
    //     ["nome" => "Curso Fullstack", "preco" => 1200.00, "duracao" => "5 meses", "img" => "imagem/pc1.jpg"],
    //     ["nome" => "Curso Marketing", "preco" => 1000.00, "duracao" => "4 meses", "img" => "imagem/pc1.jpg"],
    // ];

    $categorias=["Cursos", "Palestras", "Artigos"];
?>
