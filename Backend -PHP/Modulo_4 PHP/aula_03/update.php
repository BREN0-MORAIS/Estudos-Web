<?php
/*-----------------------------------------UPDATE--------------------------------------------------*/

$pdo = new PDO('mysql:host=localhost:8082;dbname=modulo4','root',''); //conexão

$id = 3; //id 3

$sql = $pdo->prepare("update cliente set nome = 'atualizado' ,sobrenome = 'sucesso' ");

if($sql->execute()) //se o comando sql for executado 
{
    echo 'cliente atualizado com sucesso'; //cliente foi atualizado
}

?>
