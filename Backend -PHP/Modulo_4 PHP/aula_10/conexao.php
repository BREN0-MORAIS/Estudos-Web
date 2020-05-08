<?php

define('HOST','localhost:8082');
define('DB','tesetc');
define('USER','root');
define('PASS','');

try{

    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);
    echo 'conect' ;

}catch(Exception $e){

    echo 'erro';
}



?>