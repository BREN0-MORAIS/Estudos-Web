<?php

//objeto pessoa
class Pessoa
{
    private $nome = "Breno";
    private $peso = 70;
    private $idade = 17;

    public function crescer()
    {
        $this->comer();

        echo " estou crescendo ";

    }

    private function comer()
    {
        echo " estou comendo ";

    }


}

$pesso = new pessoa;
$pesso2 = new pessoa;

$pesso2->crescer();



?>