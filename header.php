<?php include_once("config/variaveis.php");?>
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
        <!--Configurando botao de sair -->
        <li class="nav-item">
            <a class="nav-link" href="sair.php">Sair</a>
        </li>
        <?php }else { ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cadastrar</a>
        </li>
        <?php } ?>

    </ul>
</nav>

</header>

<section >
       
       <nav>
           <ul class="nav bg-dark text-white d-flex justify-content-between p-4">
           <?php foreach($categorias as $categoria){ ?>
               <li class="nav-item"><a class="nav-link text-white" href="#"><?php echo $categoria ?></a></li>
           <?php }?>
           </ul>
       </nav>
   
 
       
   </section>
