<?php
/*------------------------------------Funções -----------------------------------------*/

//chamando as funções 
mostrarNome("Breno","19");
calcular(2,3);
echo RetornarNome();

//função de calculo 
function calcular($num1,$num2){

    echo $num1+$num2;
}
//função definindo Parametro 
function mostrarNome($nome,$idade){
    echo "<h1>Nome: $nome<h1/> 
          <h1>Idade: $idade</h1><hr><br>";
}
//função com retorno 
function RetornarNome(){
   return 'Breno';
}
?>