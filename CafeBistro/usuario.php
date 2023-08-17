<?php
class Usuario{
    //atributos da classe Pessoa
    private $conn;
    private $nome;
    private $email;
    private $senha;

    //métodos da classe
    function __construct($conn){
        $this->conn = $conn;
    }

    function get_nome(){
        return $this->nome; 
    }
    function set_nome(){
        $this->nome = $nome; 
    }
    function get_email(){
        return $this->email;
    }
    function set_email(){
        $this->email = $email; 
    }
    function get_senha(){
        return $this->senha;
    }
    function set_senha(){
        $this->senha = $senha; 
    }

    //função de cadastro
    function cadastrar($nome, $email, $senha){
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senhaHash);

        if ($stmt->execute()) {
            return true;
        } else{
            return false;
        }
    }

}

?>