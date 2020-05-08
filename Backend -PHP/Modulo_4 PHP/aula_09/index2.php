<?php

define('HOST','localhost:8082'); 
define('DB','teste');
define('USER','root');
define('PASS','');

try{
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
    MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   
    $sql = $pdo->prepare("select * from usuarios");
    $sql->execute();
    $usuarios = $sql->fetchAll();
  
    foreach($usuarios as $key => $value)
    {
       echo $value['nome'];
       echo '<hr>';
    
    }
}catch(Exception $e)
{
 echo 'error';
}


?>