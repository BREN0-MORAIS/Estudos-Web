<?php

function MyAutoLoad($class){ //uma função de autoload
    $class = str_replace('\\','/',$class); //para servidores Linux ira substituir para '/'
    if(file_exists('classes/'.$class.'.php')) //verifica se a classe existe utilizando os parametros necessarios
    {
        include('classes/'.$class.'.php'); //se existe aluma classe ele inclui dinamicamente
    }
}

spl_autoload_register('MyAutoLoad'); //registra o load da classe


?>