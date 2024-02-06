<?php 
     class Funcionario {
        //atributos
        public $nome = null;
        public $tel = null;
        public $filhosNum = null;
        public $cargo = null;
        public $salario = null;
        //getters e setters
        //set
        function __set($funcData, $funcDataValue){
            $this->$funcData = $funcDataValue;
        }
        function __get($funcData){
            return $this->$funcData;
        }
    }
    $addNewFunc = new Funcionario();
    $addNewFunc->__set('nome', 'petrus');
    $addNewFunc->__set('tel', "21321312312321");
    $addNewFunc->__set('filhosNum', 8);
    $addNewFunc->__set('cargo', "desenvolvedor");
    $addNewFunc->__set('salario', 5000);
    echo "<br>";
    echo ' o funcionario '. $addNewFunc->__get('nome') . ' recebe ' . $addNewFunc->__get('salario') . ' no cargo de ' . $addNewFunc->__get('cargo') . ' e tem ' . $addNewFunc->__get('filhosNum') ."filhos.";
?>