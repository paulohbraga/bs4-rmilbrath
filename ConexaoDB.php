<?php
 
class ConexaoDB{

    private $servername = "localhost";
    private $database = "curso_estoque";
    private $username = "user";
    private $password = "braga";

    public function getConnetion(){
        $conexao = mysqli_connect($this->servername, $this->username, $this->password, $this->database) or die ('Not connected: Error connecting ' . mysqli_connect_error());
        return $conexao;
    }

}

