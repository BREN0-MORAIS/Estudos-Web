<?php
/*-------------------------------Conexão Com O banco de Dados---------------------------------------------------*/
$pdo = new PDO('mysql:host=localhost:8082;dbname=modulo4','root','');

/*OBS:
criamos uma variavel chamada $pdo depois criamos uma nova instancia com a variavel global do php que é 

$pdo = PDO('mysql:host=localhost:8082;dbname=modulo4','root','');

/********************* estudando a Estrutura******************************

PDO('
mysql  =  que é o nome do SGBD(sistemas gerenciador de banco de dados);
host = local onde esta o banco seja em local ou ip do banco , localhost ésta na maquina local o SGB;
dbname = é o nome da base de dados que criamos no phpmyadmin;
Login = Root é o usuario de acesso do SGBD, que é o usauario total vale ressaltar que nem todos tem este usuario intão varia;
senha = a senha do root na maioria das vezes com o champ vem vazia então colcamos só aspas '';
')

*/

?>