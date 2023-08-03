<?php
    class Pessoa{
        //atributos
        public $nome;
        public $idade;
        public $profissao;

        //métodos
        function __construct($nome, $idade, $profissao){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->profissao = $profissao;
        }
        function get_name(){
            return $this->nome;
        }
        function get_idade(){
            return $this->idade;
        }
        function get_profissao(){
            return $this->profissao;
        }
        function apresentar(){
            echo "<br>Olá, meu nome é ".$this->get_name().", tenho ".$this->get_idade()." anos e sou ".$this->get_profissao(); 
        }
    }

?>