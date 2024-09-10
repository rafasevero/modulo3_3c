<?php
// as classes abstratas não podem ser instaciadas
// podemos ter métodos abstratos, que devem ser implementados obrigatoriamente,
// se uma classe herdar a abstrata
// a palavra reservada tanto para classes como para métodos é abstract
// ex: abstract class ClasseAbstrata{}

    abstract class Teste{

        public static function testandoClasse(){

            echo "Este método é de uma classe abstrata\n";

        }

        abstract public function testeAbs();

    }

    // $t = new Teste;

    Teste::testandoClasse();

    class Nova extends Teste{

        public function testeAbs(){
  
            echo "Teste método abstrato\n";

        }

    }

    $n = new Nova;