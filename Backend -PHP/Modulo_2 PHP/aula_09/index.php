<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
 $nome = @$_POST['nome'];
 $email = @$_POST['email'];
 echo $nome;
 echo '<br>';
 echo $email;

 if(isset($_POST['acao'])){ //  isset executa a função do botão input onde o nae esta acao
 foreach($_POST['valor']as $key => $value){ //pegar o nome do iinput chamado valor e colocar dentro do Foreacgh

    echo "<h1>$value</h1><hr>";   //se o botão ação for executado então mostrara os resiultados
 }}

?>
<form method="post">
  <input type="text" name="nome">
  <input type="text" name="email">

  
<input type="checkbox" name="valor[]" value="10">10 <!------para executar diversos valores com o mesmo nome é necessario colocar um array no nome------->
<input type="checkbox" name="valor[]" value="50">50
<input type="checkbox" name="valor[]" value="40">40
<input type="checkbox" name="valor[]" value="30">30
<input type="checkbox" name="valor[]" value="20">20
<input type="checkbox" name="valor[]" value="">vazio
<input type="submit" name="acao" value="Enviar"> <!--------envia o formulario-------->
</form>
    
</body>
</html>