<?php
// para checar a ancestralidade de uma classe utilizamos o operador instaceof
//podemos inserir essa operação em um if, pois vai retornar um booleano
// exemplo: $objeto instaceof Humano

    class Humano{


    }

    class Animal{

    }

    class Professor extends Humano{

    }

    $harry  = new Humano;

    $theo = new Animal;

    if($harry instanceof Humano){
        echo "Harry é humano\n";
    } else{
        echo "Harry não é um humano\n";
    }

    if($theo instanceof Humano){
        echo "Theo é humano\n";
    } else {
        echo "Theo não é um humano\n";
    }

    $louis = new Professor;

    if($louis instanceof Professor){
        echo "Louis é um professor\n";
    } else {
        echo "Louis não é um professor\n";
    }

    if($louis instanceof Professor){
        echo "Louis é humano\n";
    } else {
        echo "Louis não é um humano\n";
    }

    if($theo instanceof Professor){
        echo "Theo é um professor\n";
    } else {
        echo "Theo não é um professor\n";
    }