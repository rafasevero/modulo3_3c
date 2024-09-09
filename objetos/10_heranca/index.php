<?php
// herança é o recurso da oop que dá a possibilidade de uma classe herdar 
//métodos e propriedades de outra
// a palavra reservada é extends
// ex: class Programador extends Pessoa

    class Humano{

        public $idade = 28;

        public function falar(){
            echo "Olá mundo !\n";
        }

        private function gritar(){
            echo "GRITANDOOOO!!!\n";
        }
        public function acessaGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "lalala\n";
        }

        public function acessaFalarBaixinho(){
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano{


    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessaGritar();
    $ze->acessaFalarBaixinho();

    $joao = new Programador;

    echo $joao->idade . "\n";

    $joao->falar();
    $joao->acessaGritar();
    $ze->acessaFalarBaixinho();
