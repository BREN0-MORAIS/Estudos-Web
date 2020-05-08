<?php
define('HOST','localhost:8082');
define('DB','teste');
define('USER','root');
define('PASS','');


try{
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
    MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    echo 'connect';

}catch(Exception $e)
{
    echo 'erro';
}

?>