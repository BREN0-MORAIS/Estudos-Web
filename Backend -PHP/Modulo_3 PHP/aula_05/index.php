<?php
include('interface1.php');

class Teste implements interface1{
    //metodo executando uma ação
    public function Print($par)
    {
        echo $par;
    }


}

$teste = new Teste;

//Passando o parametro no metodo
$teste->Print('ola');


?>