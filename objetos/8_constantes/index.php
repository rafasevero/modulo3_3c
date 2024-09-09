<?php
// as constantes são parecidas com variáveis, salvam valores em memórias
// porém seu valor não pode ser alterado
// ex : public const CPF = "10507615964"

    class Humano{

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){
            echo self::BRACOS ."\n";
        }
    }

    $rafa = new Humano;

    echo $rafa ::OLHOS ."\n";

    $rafa->mostrarConstante();