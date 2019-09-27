
<?php 
    $nomeSistema = "Logo Claudia!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3">
    
        <div >
            <p><?php echo $nomeSistema; ?> </p>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a>Log in</a></li>
                <li class="nav-item"><a>Cursos</a></li>
                <li class="nav-item"><a>Cadastrar</a></li>
            </ul>
            </nav>
   
    </header>

</body>
</html>