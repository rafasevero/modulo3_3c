<?php

    class Cliente{
        // atributos
        public $nome = 'Anônimo';
        public $idade =18;

        public function apresentar(){

            echo"Nome: {$this->nome}\nIdade: {$this->idade}\n ";
            //this = é usado para acessar os atributos dentro de uma função ou de um método

        }

    }

    $c1 = new Cliente();
    $c1->nome = 'Ana Silva';
    $c1->idade =27.5;
    $c1->apresentar();

    $c2 = new Cliente;
    $c2->nome ='Gabriel';
    $c2->idade = 43;
    $c2->apresentar();