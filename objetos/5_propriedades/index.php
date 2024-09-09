<?php
// para declarar propriedades cria-se uma variável dentro de uma class
// precisa definir sua privacidade, ex: public
// uma propriedade pública pode ser acessada fora do escopo do objeto

    class Car {

        public $rodas = 4;
        public $aro = 20;
        public $cor = "vermelha";

        function ligar(){
            echo "Vrummmm\n";
        }

    }
    
    $ferrari = new Car;

    echo $ferrari -> aro . "\n";
    echo $ferrari -> rodas . "\n";

    $ferrari -> cor = "azul\n";//é possível modificar dados 

    echo $ferrari -> cor;

    $ferrari -> ligar();
    