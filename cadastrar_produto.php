<?php
require_once './Produto.php';
include './Produtos_DAO.php';


$nome_produto = $_POST["nome"];
$numero_produto = $_POST["numero"];
$categoria_produto = $_POST["categoria"];
$quantidade_produto = $_POST["quantidade"];
$fornecedor_produto = $_POST["fornecedor"];

$produto = new Produto($nome_produto, $numero_produto, $categoria_produto, $quantidade_produto, $fornecedor_produto);
$con = new ProdutosDAO( $produto);

if ($con->insert()) {
    echo "inserido com sucesso";
}else {
    echo "Falha do inserir";
}

echo "<script>window.alert('Sucesso')</script>";
?>