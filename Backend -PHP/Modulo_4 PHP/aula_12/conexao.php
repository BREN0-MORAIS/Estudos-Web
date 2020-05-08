<?php

define('HOST','localhost:8082');
define('DB','modulo4');
define('USER','root');
define('PASS','');

try{
   // echo 'connect';
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);

}catch(Exception $e){
    echo 'erro';
}

?>