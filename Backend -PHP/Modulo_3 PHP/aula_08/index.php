<?php
/*------------------------------------Autoload------------------------------------------*/
include('config.php'); //esta incluindo as configurações 

new Home\Inicial(); //entra na pasta Home e chama a classe inicial
new Utilidades(); //entra na classe utilidades e mostra o resultado

/*obs: na primeira chamada tem uma barra pois estamos entrando em uma pasta e chamando a classe, ja no segundo new
a classe esta na raiz então não precisamos entrar em uma pasta
*/
?>