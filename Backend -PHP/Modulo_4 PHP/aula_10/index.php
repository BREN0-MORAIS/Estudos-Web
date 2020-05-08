<?php
include('conexao.php');
/*----------------------------Pesquisa utilizando like---------------------------------------*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesquisar</title>
</head>
<body>

<form method='post'>

<input type="text" name='pesquisar' placeholder="pesquiar">
<input class='btnpes' type="submit" name='buscar' value="pesquiar">

<h4>Para testar o sitema pode cadastrar nomes logo abaixo</h4>
<input type="text" name='insertnome' placeholder="insira o nome aqui">
<input class='btncas' type="submit" name='cadastrar' value="Cadastrar Nome">

</form>
<?php


if(isset($_POST['cadastrar'])){
    $inserirnome = $_POST['insertnome'];
    $inserirnome = base64_encode($inserirnome);
    $sql = $pdo->prepare("insert into email(email) values(?) ");
    $sql->execute(array($inserirnome));
}

$pes = $_POST['pesquisar'];

if(isset($_POST['buscar'])){
    $sql = $pdo->prepare("select * from email where email like '$pes%' ");
    $sql->execute();
    $lista = $sql->fetchAll();
    foreach ($lista as $key => $value) {
       
        if($value['email']== null){
            echo 'email vazio';
        }
       if($value['id'] <= 115){

        echo $value['email'];
       }elseif($value['id'] > 115){
             echo base64_decode($value['email']);
        }

        echo '<hr>';
    }
}




?>
    
</body>
</html>