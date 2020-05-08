<?php
include('insert.php'); //incluindo o insert

/*--------------------------------------Formulario-------------------------------------------*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo</title>
</head>
<body>

<form method = "post"> 

<input type="text" placeholder="nome"name="nome" required/>
<input type="text" placeholder="Sobrenome"name ="sobrenome" required/>
<input type="submit" name="acao" value="enviar"required/>
</form>
    
</body>
</html>