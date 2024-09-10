<?php
// em php tem alguns métodos que ajudam a entender melhor os objetos
//is_object() = verifica se uma variável é um objeto
//get_class() = verifica a classe de um objeto
//method_exists() = verifica se um método existe em um objeto

    class Humano{

        public function falar(){
            echo "Olá";
        }

    }

    $rafa =  new Humano;

    $teste = 10;

    if(is_object($rafa)){
        echo "é um objeto \n";
    } else {
        echo "não é um objeto\n";
    }

    if(is_object($teste)){
        echo "é um objeto \n";
    } else {
        echo "não é um objeto\n";
    }

    echo get_class($rafa). "\n";//aparece o nome da classe

    if(method_exists($rafa,"falar")){
        echo "Método existe\n";
    } else{
        echo "Método não existe\n";
    }

    if(method_exists($rafa,"abcd")){
        echo "Método existe\n";
    } else{
        echo "Método não existe\n";
    }

