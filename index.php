<?php 
    $nomeSistema = "Logo Claudia!";
    $usuario = ["nome" => "Claudia"];
    
    //Cada array tera informacoes de cada produto.
    //Array de posicao com array associativa.
    $produtos= [
        ["nome" => "Curso Fullstack", "preco" => 1200.00, "duracao" => "5 meses"],
        ["nome" => "Curso Marketing", "preco" => 1000.00, "duracao" => "4 meses"],
    ];

    $categorias=["Cursos", "Palestras", "Artigos"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <header class="d-flex justify-content-between align-items-center p-3">

        <div id="logo">
            <h1><?php echo $nomeSistema; ?> </h1>
        </div>
        <nav>
            <ul class="nav">

                <?php if (isset($usuario) && $usuario != []) { ?>

                <li class="nav-item">
                    <a class="nav-link" href="">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Olá <?php echo $usuario['nome']?></a>
                </li>
                <?php }else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
                <?php } ?>

            </ul>
        </nav>

    </header>

    <main>
        <section >
       
            <nav>
                <ul class="nav bg-dark text-white d-flex justify-content-between p-4">
                <?php foreach($categorias as $categoria){ ?>
                    <li class="nav-item"><a class="nav-link text-white" href="#"><?php echo $categoria ?></a></li>
                <?php }?>
                </ul>
            </nav>
        
      
            
        </section>

        <section class="container mt-4">

            <div class="row justify-content-between ">
                <?php if(isset($produtos) && $produtos != []){ ?>
                    <?php foreach($produtos as $produto){ ?>
                    <div class="col-lg-3 card text-center">
                        <!--Imprimir o nome de cada produto-->
                        <h1><?php echo $produto['nome']; ?></h1>
                        <img src="imagem/pc1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text"><?php echo $produto['preco']; ?></h5>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <!--Fechando o foreach-->
                    <?php } ?>
                    <!--Fechando o if-->
                <?php }else { ?>
                    <h1>Não tem produtos cadastrados nessa sessao :(</h1>
        
                <?php } ?>                

                


            </div>


        </section>
    </main>

</body>

</html>