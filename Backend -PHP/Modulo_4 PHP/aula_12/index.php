<?php
/*---------------------------------------having----------------------------------------*/
include('conexao.php');
//selecione tudo da tabela cliente e agrupa a coluna cargo mostrando somente os que tiver cargo com o numero maior do que 2
$sql = $pdo->prepare("select * from tblcliente group by cargo having cargo <3");
$sql->execute();
$info = $sql->fetchAll();

foreach($info as $key => $value){

    echo '<pre>';
    echo $value['nome'].$value['cargo'];
    echo '</pre>';
    echo '<hr>';
}

/*
grop by agrupa os dados repetidos mostrando somente uma informação

*/


?>