<?php
/*------------------------------------Foreach-------------------------------------------*/

$nomes = array('Breno','Guilherme','Pedro','Samira','Leonardo','Ana','Maria','Maria');
$produtos = array('Tomate','Maçã','Uva','Laranja','Pessêgo');
$quantidade =  count($nomes);

echo "a quantidade de array de nomes é :  $quantidade";
echo '<h1 style="text-align:center;">Lista de Nomes</h1>';
//$arr é a variavel que tem o array, e o $e é o indice do array =>value pegar o valor
foreach($nomes as $e => $value ){
    echo '<br>';
    echo  "$e $nomes[$e]";
    echo '<br>';
    echo '<hr>';
}

echo '<br><h1 style="text-align:center;">Lista de Produtos</h1>';
foreach($produtos as $indice => $value)
{
 echo $indice.$produtos[$indice]."<hr><br>";

}

?>