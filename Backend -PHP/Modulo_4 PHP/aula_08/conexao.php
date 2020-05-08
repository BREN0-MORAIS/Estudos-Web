<?php
/*--------------------------------Conexão segura com PHP------------------------------------------------------*/

//definindo constantes
define('HOST','localhost:8082');
define('DB','modulo4');
define('USER','root');
define('PASS','');

try{
$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
echo '<strong>conectado</strong>';
}catch(Exception $e){ //o erro sera armazenado na variavel $e
    echo '<srong> error ao conectar</strong>';
}

/*
//server para adicionar um atributo utf8 para não ter interferencia em caracteres especiais
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
*/


?>