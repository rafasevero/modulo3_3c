<?php
// o $this se refere a instância atual do objeto
// podendo assim alterar um valor de uma propriedade do objeto com:
// $this -> propriedade = "x"
// pode-se invocar um método do objeto com this também
    class Animal{

        public $nome;

        function escolherNome($nome){
            $this->nome = $nome; //o nome deste objeto é o nome que vem do parametro da função

        }

        function latir(){
            return "au au\n";
        }

        function latirForte(){
            return strtoupper($this->latir());//colocar em capslock
        }

    }

    $frida = new Animal;

    echo "O nome do animal é: ".$frida->nome . "\n";

    $frida->escolherNome("Frida");

    echo "O nome do animal é: ".$frida->nome ."\n";

    echo $frida->latir();
    echo $frida->latirForte();

