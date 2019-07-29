<?php

class Produto {
    private $nome;
    private $numero;
    private $categoria;
    private $quantidade;
    private $fornecedor;

    public function __construct($nome, $numero, $categoria, $quantidade, $fornecedor) {
        $this->nome = $nome;
        $this->numero = (int)$numero;
        $this->categoria = $categoria;
        $this->quantidade = (int)$quantidade;
        $this->fornecedor = $fornecedor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;
        return $this;
    }

    public function toString()
    {
        return "Produto: " . $this->nome .
             "<br> Numero do produto: " . $this->numero . 
             "<br> Categoria: " . $this->categoria . 
             "<br> Quantidade: " . $this->quantidade . 
             "<br> Fornecedor: " . $this->fornecedor. "<br>";
    }

}