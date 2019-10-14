<?php 
    function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
        //So criou um nome de arquivo qualquer.
        $nomeArquivo= "produto.json";
        if(file_exists($nomeArquivo)){
            //se ja existisse uma estrutura eu não precisaria criar uma nova.
            //Exibir que deu certo para o usuario.
                //abrir o arquivo e pegar as informações que esta dentro dele
                //O arquivo estara em json e por conta do php precisamos transformar o json em array.
                $arquivo = file_get_contents($nomeArquivo);
                //transformar json em array.
                //criei uma avriavel $produto, nao tem nd a ver com a variavel de baixo.
                //se nao colocar o true ele transforma em um objeto.
                $produtos = json_decode($arquivo, true);

                //adicionado um novo produto na array que estava dentrod o arquivo.
                //adicionando um novo produto, contendo os parametros que recebi.
                $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagemProduto"=>$imgProduto];
                
                //transoforma em json
                $json = json_encode($produtos);
                //salvando as infromacoes da array
                //salva o retorno dessa funcao
                //vai validar se deu certo ou nao
                $deuCerto = file_put_contents($nomeArquivo, $json);
                //vai validar se deu certo ou nao

                //Deixar uma mensagem para o usuario se deu certo ou nao.
                if($deuCerto){
                    return "Deu certo brother!";            
    
                }else{
                    return "Nao deu bom";
                }


        }else{
            //somente par ficar didatico essa linha.
            $produtos= [];
            //array_push()  faz a msm coisa que embaixo
            $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagemProduto"=>$imgProduto];
            //var_dump($produtos);
            //transformando a array em json
            $json = json_encode($produtos);
            //Salvando as informações dentro de um arquivo.
            $deuCerto = file_put_contents($nomeArquivo, $json);
            //Deixar uma mensagem para o usuario se deu certo ou nao.
            if($deuCerto){
                return "Deu certo brother!";            

            }else{
                return "Nao deu bom";
            }
        }
    }
    //Se estiver vazio os campos ele não vai cadastrar o produto.
    //Saber se a função estava recebendo o parametro de forma correta, e se estava criando a array de forma correta.
    if($_POST){
        //salvando arquivo
        //separa as info que recebo do meu file em variaveis diferentes.
        //pega o nome que esta dentro da array imgProduto.Que contem todas as info do produto.
        $nomeImg = $_FILES['imgProduto']['name'];
        //pegar o caminho a imagem esta de forma temporaria
        $localTmp = $_FILES['imgProduto']['tmp_name'];
        //caminho para salvar dentro do Json
        //Onde vou salvar a imagem
        $caminhoSalvo = "imagem/".$nomeImg;
        //fazer o move_upload files
        //retrona um booleano para saber se esta dando certo ou nao.
        $deucerto = move_uploaded_file($localTmp, $caminhoSalvo);
        exit;


       
        echo cadastrarProduto($_POST['nomeProduto'], $_POST['descProduto'], $_POST['imgProduto'], $_POST['precoProduto']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro Produtos</title>
</head>

<body>
    <?php include_once("header.php"); ?>

    <main class="container">

        <div class="row">
            <div class="col-12">
                <h1>Cadastro de Produto</h1>
            </div>

            <div class="col-12">
            <!--permite o formulario enviar arquivos para o servidor.-->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="Descrição do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" name="precoProduto" placeholder="Preço do Produto"/>
                    </div>

                    <button class="btn btn-success">Cadastrar Produto</button>

                </form>
            </div>
        </div>

    </main>

</body>
</html>