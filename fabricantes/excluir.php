<?php
require_once "../src/funcoes-fabricantes.php";
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$fabricante = lerUmFabricante($conexao, $id);

if(isset($_POST['excluir'])){
    excluirFabricantes($conexao, $id);
    header("location:visualizar.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Exclusão</title>
</head>
<body>
    <h1>Fabricantes | SELECT/DELETE</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$fabricante['id']?>">
        <p>
            <label for="nome">Nome:</label>
            <input value="<?=$fabricante['nome']?>" required type="text" name="nome" id="nome">
        </p>
        <button type="submit" name="excluir">Excluir fabricante</button>
    </form>
</body>
</html>