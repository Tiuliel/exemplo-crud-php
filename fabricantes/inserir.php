<?php
/* Verificando se o formulário/botão foi acionado*/
if(isset($_POST['inserir'])){
    //importando as funções e conexão
require_once "../src/funcoes-fabricantes.php";

    // Capturando o valor digitado do nome e sanitizando
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// pode ser assim tbm
   // $nome = filter_var($_POST["nome"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // chamar a função, passar os dados de conexão e o dado (nome do fabricante) digitado no formulário.
   inserirFabricante($conexao, $nome);
   
   // Redirecionamento
   header("location:visualizar.php");

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Inserção</title>
</head>
<body>
    <h1>Fabricantes | INSERT</h1>
    <hr>
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        <button type="submit" name="inserir">Inserir fabricante</button>
    </form>

</body>
</html>