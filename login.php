<?php
    // A senha tem que ser em aspas simples
    //da onde saiu essa senaha?
    $usuario = ["email" => "email@email.com", "senha" => '$2y$10$qL5vZE5DyuaPpar7Rw92ueQnSI6n5PeOTCFM/ah7Ac4tMk4IdFeky'];

    if($POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //validando email
        if($email == $usuario['email']){
            //validando senha 
            if(password_verify($senha, $usuario['senha'])){
                session_start();
                $_SESSION['usuario'] = ['nome' => 'Claudia'];
                //para redirecionar o susuario caso tudo der certo
                header('Location:index.php');

            }else{
                echo 'Email ou senha invalidos';
            }

        }else{
            echo 'Email ou senha invalidos';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>

    <?php include_once "header.php"; ?>
    <main class = 'd-flex justify-content-center align-items-center p-5'>

        <form action="" method="post" class="card p-2">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>

            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="seha" class="form-control" required>

            </div>
            <div class="form-group text-center">
                <button class="btn btn-sucess" type="submit">Logar</button>
                
            </div>


        </form>

    </main>
    
</body>
</html>
