<?php
/*------------------------------------------Abstract---------------------------------------------------------------*/
abstract  class Teste{
//classe abstrata server apenas para ser herdadas, contendo funções onde outras classes pode acessar, não pode ser instanciada
    public function MostrarTexto(){
        echo 'ola';
    }

    //metodo abstrato é obrigado quando outra classe herdeter ele executando uma ação
    abstract function Func2();

}

class Principal extends Teste{
public function Func2()
{
    echo 'func2 sobescrita';
}


public static function MetodoEstatico()
{
    echo 'este é um metodo estatico';
}

public function Funcao()
{
    //serve  para chamar metodos e atributos dentro da própria classe 
    self::MetodoEstatico();
}

}


$principal = new Principal;
$principal->MostrarTexto();
$principal->Func2();
Principal::MetodoEstatico();

?>