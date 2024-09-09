<?php
// para declarar um metódo vamos utilizar a sintaxe de function, porém dentro de uma class
// podemos retornar ou imprimir dados, dependendo da nossa regra de negócios

    class Pessoa{
        function falar(){
            echo "Olá, eu sou um objeto!\n";
        }
        function somar($x,$y){
            echo $x + $y . "\n";
        }
    }

    $rafa = new Pessoa;

    $rafa -> falar();
    $rafa -> falar();
    $rafa -> falar();

    $luca = new Pessoa;

    $luca -> falar();

    $rafa -> somar(2, 6);
    $luca -> somar(4, 2);

