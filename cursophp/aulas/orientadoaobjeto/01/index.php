<?php 
    //modelo
        class Funcionario {
            //atributos
            public $nome = 'jose';
            public $tel = '86 14561464546';
            public $filhosNum = 4;

            //métodos
            function resumirCardFunc() {
                return "$this->nome possui $this->filhosNum filhos";
            }
            function modificarNumFilhos($filhosNum) {
                $this->filhosNum = $filhosNum;
            }
       
        }
        $viewResume = new Funcionario();
        $viewResume -> modificarNumFilhos(7);
        echo $viewResume -> resumirCardFunc();

        $viewResume2 = new Funcionario();
        $viewResume2 -> modificarNumFilhos(2);
        echo $viewResume2 -> resumirCardFunc();
?>