<?php
/*---------------------------Condições---------------------------------*/
$sexo[0] = "masculino";
$sexo[1] = "masculino";

//if = se  sexo na psição 0 for igual aseno na posição 1
if($sexo[0] == $sexo[1]){
    echo "os dois batem como iguais"; // então mostra esta frase na tela
}else  //else == se não
{
    echo "impossivel ser iguais"; //mostra esta frase nba tela
}

//se sexo na posição 1 for diferente de sexo na posição 2 
if($sexo[1] != $sexo[0]){
    echo "é diferente"; //execute esta frase
}else{ // se não for 
    echo  "São iguais" ;//esxecute esta frase
}

//confere se eles são identicos 
if($sexo[0] === $sexo[1]){
    echo "eles são identicos , tem o mesmo valor e o mesmo tipo";
}

 ?>