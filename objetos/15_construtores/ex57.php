<?php

    class Cachorro{

        public $patas;
        public $cor;
        public $raca;

        function __construct($patas,$cor,$raca){

            $this->patas = $patas;
            $this->cor = $cor;
            $this->raca = $raca;

        }
    }

    $boiadeiro = new Cachorro(4,"preto e branco","boiadeiro australiano");

    echo "o cachorro  tem a cor $boiadeiro->cor e é da raça $boiadeiro->raca\n";