<?php
    class Retangulo{
        //atributos
        public $largura;
        public $altura;

        //métodos{
        function __construct($largura, $altura){
            $this->largura = $largura;
            $this->altura = $altura;
        }
        function area(){
            return  $this->largura * $this->altura;
        }
        function perimetro(){
            return  $this->largura*2 + $this->altura*2;
        }
        
    }
?>