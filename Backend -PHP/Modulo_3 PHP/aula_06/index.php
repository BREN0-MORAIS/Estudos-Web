<?php
/*--------------------------Metodos Magicos--------------------------------------------*/
include('class1.php');


$class1 = new class1('Breno','19','000.000.000-00');

$class1->SetNome('Breno1');//modificando o nome padrão;
$class1->SetIdade(25);//modificando a idade Padrão


//metodos acessores
echo '<br>'.$class1->GetNome();
echo '<br>'.$class1->GetIdade();
echo '<br>'.$class1->GetCPF();



?>