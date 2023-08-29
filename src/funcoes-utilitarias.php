<?php

function formataPreco (float $preco):string {
$precoFormatado = number_format($preco, 2, ",", ".");
    return "R$ " . $precoFormatado;
};
?>

