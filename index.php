<?php
    require ("pessoa.php");
    require ("retangulo.php");
    class Fruta{
        //atributos
        private $nome;
        public $cor;

        //métodos
        function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }
        function set_name($nome){
            $this->nome = $nome;
        }
        function get_name(){
            return $this->nome;
        }
        function set_cor($cor){
            $this->cor = $cor;
        }
        function get_cor(){
            return $this->cor;
        }
    }

    //criando um objeto
    $maca = new Fruta("maca_ifsp", "vermelho");
    $banana = new Fruta("banana_ifsp", "amarelo");

    $aluno1 = new Pessoa("Renato", 18, "Professor");
    $aluno2 = new Pessoa("Clóvis", 99, "a Universal");

    $retangulo1 = new Retangulo(2, 4);

    //echo $maca->nome;
    echo $maca->get_name();
    echo "<br>".$maca->get_cor();
    echo "<br>".$banana->get_name();
    echo "<br>".$banana->get_cor();

    echo "<br>".$aluno1->apresentar();
    echo "<br>".$aluno2->apresentar();

    echo "<br>Área do retangulo= ".$retangulo1.area();
    echo "<br>Perímetro do retangulo= ".$retangulo1.perimetro();



?>