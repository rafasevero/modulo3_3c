 <?php 
// em php temos alguns métodos que nos ajudam a entender as classes
// class_exists() = verifica se uma classe existe
// get_class_methods() = verifica os metodos de uma classe
// get_class_vars() = mapeamento das propriedades de uma classe

 class Humano{

    public $idade;//isso = propriedades
    public $nome;
    public $profissão;

    public function falar(){}

    public function andar(){}

 }

 if(class_exists("Humano")){
    echo "classe existe\n";
 }
 if(class_exists("Cachorro")){
    echo "A classe existe\n";
 }
 else{
    echo "A classe não existe\n";
 }

 print_r(get_class_vars("Humano"));

 print_r(get_class_methods("Humano")); 

