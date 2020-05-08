<?php

/*------------------------------------Tipos de Classes-------------------------------------------*/

// quando tiver uma classe com o final, ela não podera ser herdada por outra classe exemplo final class filha 
class filha 
{
    
    public function printHello()
    {
        echo '<br>hello<br>';
    }

    protected function teste()
{
    echo 'chamando função teste';
}

}


//com o extends você consegue

class pai extends filha{

    public function mostrarTchau()
    {
      //chama a função original do PHP;
        parent::teste();
        echo '<br>tchau<br>';
        $this->teste();
    }
    
}

$pai = new pai();
$pai->mostrarTchau();
$pai->printHello();

?>