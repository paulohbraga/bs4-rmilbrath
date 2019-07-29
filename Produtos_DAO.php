<?php
include './ConexaoDB.php';

class ProdutosDAO extends ConexaoDB{
    private $produto; 

    public function __construct(Produto $produto) {
        $this->produto = $produto;
    }

    public function productToString() 
    {
        echo $this->produto->toString();
    }

    public function insert()
    {

        $sql = "INSERT INTO `estoque`(`nro_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) 
        VALUES ({$this->produto->getNumero()}, '{$this->produto->getNome()}', '{$this->produto->getCategoria()}', {$this->produto->getQuantidade()}, '{$this->produto->getFornecedor()}')";

        return $inserir = mysqli_query($this->getConnetion(),$sql);
    }

    public function read()
    {
        //Implement
    }
    public function update()
    {
        //Implement
    }
    public function delete()
    {
        //Implement
    }
}
