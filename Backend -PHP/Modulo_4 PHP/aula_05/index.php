<?php

class select{  
    public  function MostrarTela(){
        include('conexao.php');
     
        $sql = $pdo->prepare("select * from post where categoria_id = 2");
        $sql->execute();
        $info = $sql->fetchAll(); //pega tudos os dados da tabela Baseado nos parametros que passou na query
        
        foreach($info as $key =>$value) //$info -> variavel as key -> indice  ->$value valores que serão executados 
        { 
            echo $value['categoria_id'];
            echo ' <br><br><h3>TITULO:  '.$value['titulo'].'</h3> <br>';
            echo ' <br>Conteudo '.$value['conteudo'].'<br><hr>'; 
        }
    
    }
}
$select = new select;
$select->MostrarTela();
?>