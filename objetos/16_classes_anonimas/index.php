<?php
// as classes anonimas são criadas em uma variável e não possuem nome
// elas funcionam como qualquer outra classe
// precisa-se fecha-la com ";"
// ex: $anonima = new class(){};

$pessoa =  new class(){

    public $nome = "Rafa";

    public function dizerNome(){
        
        echo "Olá meu nome é $this->nome \n";

    }

};

echo $pessoa->nome . "\n";

$pessoa->dizerNome();