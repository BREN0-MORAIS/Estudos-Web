<?php
/*---------------------------------------Between an in----------------------------------------*/
include('conexao.php');

//seleciona tudo da tabela tblcliente onde id estiver entre 1 e 10
$sql = $pdo->prepare("select * from tblcliente where id between 1 and 400");
$sql->execute();
$exibir = $sql->fetchAll();

foreach($exibir as $key => $value){

    echo '['.$value['id'].'] '.$value['nome'];
    echo '<hr>';
}


?>


<?php
/*---------------------------------------Between an in----------------------------------------*/

/*
//seleciona tudo da tabela tblcliene onde o id for igual a 123
$sql = $pdo->prepare("select * from tblcliente where id in(1,2,3,4,31)");
$sql->execute();
$exibir = $sql->fetchAll();

foreach($exibir as $key => $value){

    echo '['.$value['id'].'] '.$value['nome'];
    echo '<hr>';
}

 in()
serve para uma possivel comparação no banco e buscar dados especificos, igual colocar um where id = 1;
 
*/

?>