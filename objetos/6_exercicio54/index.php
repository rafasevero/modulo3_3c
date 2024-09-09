<?php
    class Pessoa{

        public $nome;
        public $idade;
        
        function andar($m){
            echo "a pessoa andou $m metros\n";
         }
    }

    $luisa = new Pessoa;
    $luisa -> nome="luisa rodrigues";
    $luisa -> idade = 23;
    echo "o nome dela é $luisa->nome e tem $luisa->idade anos \n";
    $luisa -> andar(12);