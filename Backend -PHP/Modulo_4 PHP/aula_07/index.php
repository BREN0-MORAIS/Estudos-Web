<?php
/*--------------------------------------left e right join--------------------------------*/
include('conexao.php');
$sql = $pdo->prepare("select * from tblcliente left join cargos on tblcliente.cargo = cargos.id ");
$sql->execute();
$info = $sql->fetchAll();

foreach ($info as $key => $value) {
    echo 'Nome: '.$value['nome'];
    echo '  Cargo: '.$value['cargo_nome'];
    echo'<hr>';  
}
/*
obs:
//seleciona todos os dados da tblclientes e junta os dados da tabela cargos da esquerda onde tblcliente com a coluna cargo for igual 
a tabela cargos com a coluna id
select * from tblcliente left join cargos on tblcliente.cargo = cargos.id 

//seleciona todos os dados da tblclientes e junta os dados da tabela cargos da direita onde tblcliente com a coluna cargo for igual 
a tabela cargos com a coluna id
select * from tblcliente right join cargos on tblcliente.cargo = cargos.id 
*/
 

?>


