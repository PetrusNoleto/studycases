<?php 
     class Pessoa {
        public $nome = null;
        function __construct($name){
            echo "this->name = $name";
        }
        function __get($atributo){
            return $this->nome->$atributo;
        }
    }
    $addNewPerson = new Pessoa('jorge');
?>