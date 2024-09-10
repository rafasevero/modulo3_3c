 <?php
 // as traits permitem o reuso do código sem hierarquia de classes, ou seja, sem herança 
 // podemos utilizar os métodos da classe que foi feita a trait
 // utilizamos a palavra reservada use
 // exemplo : class Teste {        use Classe Trait}

    trait Objeto {

        public function teste(){
            echo "Testando trait de objeto\n";
        }
    }

    trait Testando {

        public $y = 10;


        public function traitTeste(){
            echo "Este método é da trait Testando\n";
        }

    }

    class Central{
        use Objeto;
        use Testando;
    }

    $x = new Central;
    $x->teste();
    $x->traitTeste();
    echo $x->y."\n";