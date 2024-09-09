<?php

    class Carro{
        public $cor;
        public $tetoSolar;
        public $velocidadeMáxima;

        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
    
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h \n";
        }

    }

    $bmw = new Carro;

    $bmw->cor = "Branca";

    $bmw->setVelocidadeMaxima(200);

    $bmw->getVelocidadeMaxima();

