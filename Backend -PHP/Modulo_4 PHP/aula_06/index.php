<?php
/*---------------------------------GROUP BY, LIMIT, ORDER BY-----------------------------------------------------------------*/
include('conexao.php');

$sql = $pdo->prepare("select * from tblcliente order by nome desc");
$sql->execute();
$clientes = $sql->fetchAll();

foreach($clientes as $key => $value){

    echo '<br>'.$value['nome'];
    echo " ".$value['cargo'].'<br>';
    echo'<hr>';

}

/*
OBS:
     //seleciona todos os dados da tabela tblcliente e ordena a coluna cargo em ordem decrescente 
     select * from tblcliente order by cargo DESC

     //seleciona todos os dados da tabela tblcliente e cria um grupo inde retornara somenete um dado cm valor igual
     select * from tblcliente group by cargo

     //seleciona todos os dados da tabela tblcliente e agrupa a coluna cargo colocando limit e retornando soente 1 dado
     select * from tblcliente group by cargo limit 1
*/

?>