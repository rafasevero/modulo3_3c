<?php

//pelos construtores podemos inicializar objetos com valores de propriedades
// unicos para cada objeto
// passamos como argumento os valores das propriedades
// ex : function__construct($portas,$moto,$teto_solar){}  

    class  Car{

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas,$cor,$marca){

            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;

        }

    }

    $ferrari = new Car(4,"Vermelha","Ferrari");

    echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor \n";