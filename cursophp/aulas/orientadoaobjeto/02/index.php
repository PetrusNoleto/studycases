<?php 
     class Funcionario {
        //atributos
        public $nome = null;
        public $tel = null;
        public $filhosNum = null;

        //getters e setters
        //set
        function setFuncName($nome){
            $this->nome = $nome;
        }
        function setFuncPhone($tel){
            $this->tel = $tel;
        }
        function setNumFilhos($filhosNum){
            $this->filhosNum = $filhosNum;
        }
        //get

        function getFuncName(){
            return "$this->nome";
        }
        function getFuncPhone(){
            return "$this->tel";
        }
        function getNumFilhos(){
            return "$this->filhosNum";
        }
    }

    $addNewFunc = new Funcionario();
    $addNewFunc-> setFuncName("petrus");
    $addNewFunc-> setFuncPhone("8699830105");
    $addNewFunc-> setNumFilhos(3);
    echo "<br>";
    echo ' o funcionario ' . $addNewFunc->getFuncName() .' tem um telefone de contato '. $addNewFunc->getFuncPhone(). ' possui '. $addNewFunc->getNumFilhos() .' filhos(a) ';
?>