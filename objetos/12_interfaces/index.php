<?php
// as interfaces criam um modelo de definição de uma classe
// então toda classe que implementar uma interface, deverá implementar
// também suas propriedades e métodos, obrigatoriamente
// a palavra reservada é implements
// ex : class Humano implements Caracteristicas

    interface Caracteristicas{

        const nome = "Lucas";

        public function falar();

    }

    class Humano implements Caracteristicas{

        public $idade = 18;

        public function falar(){
            echo "Olá Mundo \n";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . "\n";
        }

    }

    $lucas =  new Humano;

    $lucas->falar();

    $lucas->dizerNome();

