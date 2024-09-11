<?php

    class Pessoa{

        public $nome;
        public $idade;

        function __construct($novoNome,$idade=18){

            echo "Construtor invocado !\n";
            $this->nome = $novoNome;
            $this->idade = $idade;
            // desta forma, inicializa o obj sem que precise ter um valor padrã logo acima
        }

        function __destruct(){
            echo "E morreu\n";
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos\n";
        }
    }

    $pessoa = new Pessoa('RAFAELA SEVERO',17);
    $pessoa->apresentar();
    unset($pessoa);//é responsável por chamar o destrutor

    $pessoa2 = new Pessoa('MARIA PAULA');
    $pessoa2->apresentar();
    $pessoa2 = null;