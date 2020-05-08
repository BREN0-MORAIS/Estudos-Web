<?php

//public conseguimos acessar de qualquer lugar 
//private só conseguimos acessar dentro da classe
class  Exemplo{
    private $var1;
    public $var2;
    public static $var3 = "Estatico";

    public static function MostrarMenssagem(){
        echo "Mostrar menssagem na tela";
    }
 
    public static function setVar1($var1){
    $this->var1 = $var1;

    }
}


?>