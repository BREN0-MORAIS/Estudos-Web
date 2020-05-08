<?php
include('conexao.php');

$valor = 5;

//preparando a query de deletar com condição
$sql = $pdo->prepare("delete from usuario where idusuario > ?"); // o '?' é para evitar sql injection pode se colocar o valor no execute
if($sql->execute(array($valor)))//se executar na pagina ou ele passara por esta condição
{
    echo 'delete executado com sucess'; //aparecera esta menssagem na tela se tudo ocorrer bem
}
?>
