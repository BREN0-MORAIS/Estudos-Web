<?php

class class1
{
    private $nome;
    private $idade;
    private $cpf;

    //contruct é o primeiro metodo que sera chamado, esta  implementando nos valores padrões
   public  function __construct($nome,$idade,$cpf)
    {
     $this->nome = $nome;
     $this->idade = $idade;
     $this->cpf  = $cpf;
    }
//metodos acessores, retorna o nome para private
    public function GetNome()
    {
        return $this->nome;
    }
    public function GetIdade(){

        return $this->idade;
    }
    
    public function GetCPF()
    {

        return $this->cpf;
    }

    //Metodos Modificadores
    public function SetNome($nome)
    {
       $this->nome = $nome;
      return $nome;
    }
    public function SetIdade($idade)
    {
        $this->idade = $idade;
        return $this->idade;
    }
}


?>