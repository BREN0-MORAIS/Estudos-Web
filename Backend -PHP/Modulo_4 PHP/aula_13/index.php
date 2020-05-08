<?php
/*---------------------------------------Subquery----------------------------------------*/
include('conexao.php');
//apresentado as tabelas 
$sql = $pdo->query("show tables");
$tables =  $sql->fetchAll();


//mostrando um array das tabelas em codigo 
echo '<pre>';
print_r ($tables);
echo '</pre>';

//criando tabela em php
$sql =' create table Criadopelophp1(
    id int primary key auto_increment,
    nome varchar(255),
    categoria varchar(255)
)';

//executando o comando de criação de tabelas em php
$pdo->exec($sql);
?>