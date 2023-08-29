<?php
require_once"../src/funcoes-produtos.php";
require_once"../src/funcoes-utilitarias.php";
$listaDeProdutos = lerProdutos($conexao);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Visualização</title>
    <style>
        *{box-sizing: border-box;}

        .produtos{
            font-family: 'Segoe UI';
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            width: 80%;
            margin: auto;
        }

        .produto{
            background-color:khaki;
            padding: 1rem;
            width: 49%;
            box-shadow: black 0 0 10px 1px ;
        }
    </style>
</head>
<body>
<h1>Produtos | SELECT - 
        <a href="../index.php">Home</a>
    </h1>

    <hr>
    <h2>Lendo e carregando todos os produtos.</h2>

    <p><a href="inserir.php">
        Inserir novo produtos</a></p>

        <div class="produtos">
<?php foreach($listaDeProdutos as $produto){
    $preco = formataPreco($produto["preco"]);
    ?>
        <article class="produto">
            <h3><?=$produto["nome"]?></h3>
            <p><b>Preço: </b><?=$preco?></p>
            <p><b>Quantidade: </b><?=$produto["quantidade"]?> </p>
        </article>
        <?php }?>
        </div>
</body>
</html>