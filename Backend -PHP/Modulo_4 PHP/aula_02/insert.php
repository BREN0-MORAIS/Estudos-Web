<?php
include('conexao.php'); //incluindo a conexão
/*---------------------------------executando o insert--------------------------*/
date_default_timezone_set('America/sao_paulo'); //data de são paulo
if(isset($_POST['acao'])){ //verificando se existe uma nome no formulario que tem como objetivo executar uma ação

    $nome = $_POST['nome']; //pegando nome do formulario
    $sobrenome = $_POST['sobrenome']; //pegando sobrenome do formulario
    $data_hora = date('y-m-d H:i:s'); //pegand data e hora atual do time 
    
    $sql = $pdo->prepare("insert into cliente(nome,sobrenome,data_hora) values (?,?,?)"); //preparando o comando sql
     
     $sql->execute(array($nome,$sobrenome,$data_hora)); //executando o comando o sql e insrindo nas culunas
     echo 'inserido com sucesso';
    }
?>
