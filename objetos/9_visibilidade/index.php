<?php
//temos três formatos de visibilidade : public, protected e private
// PUBLIC: a propriedade ou método pode ser acessada de qualquer forma
// PROTECTED: a propriedade ou método pode ser acessada apenas pela classe de origem ou 
// as que recebem a mesma de herança
//PRIVATE : a propriedade ou método pode ser acessada apenas pela classe que foi criada

    class Car{

        public $rodas = 4;
        private $vidro = "sem película";
        protected $portas = 4;


        public function getVidro(){
            return $this->vidro;
        }
        public function getPortas(){
            return $this->portas;
        }

    }

    class Mecanico{

        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro,$pelicula){
            $carro->vidro = $pelicula;
        }

    }

    $carro = new Car;

    echo "$carro->rodas\n";

    $rafa = new Mecanico;

    $rafa->alterarRodas($carro);

    echo "$carro->rodas \n";

    //nao pode alterar, pois é private
    //$rafa->colocarPelicula($carro,"G20");

    //$carro-> peliculaDeFabrica("G10");
    echo $carro->getVidro()." \n";
    echo $carro->getPortas()." \n";


