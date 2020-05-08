<?php
/*-----------------------------Designers Paterns------------Padrões de Projeto------------------------------*/
class Cachorro{ //classe Cachorro que tem o metodo construtor que mostrar a menssagem na tela
    public function __construct(){
        echo 'classe Cachorro';
    }

}
class Gato{ //classe Gato que tem o metoo construtor que mostrar a menssagem na tela
    public function __construct(){
        echo 'classe Gato';
    }
}
class Animal //classe animal que tem como objetivo suportar as classes acima
{
    public static function Build($nomeclasse) //metodo estatico que tem como parametro o nome das classes 
    {
        if(class_exists($nomeclasse)) //condição que verifica se o valor informado corresponde com alguma classe acima
        {
            return new $nomeclasse; //se o nome da classe corresponde com alguma que exista ele retornara
        }else{  //caso  contrário  ele mostrara a menssagem abaixo
            die('ops classe não existe');
        }
        
    }
}

Animal::Build('Gato');
/*
obs: Criamos 3 classes Cachorro, Gato e Animal, sabendo que as 2 primeiras classes  são animal temos a classe chamada animal
para "utilizar" , criando um metodo estatico, verificamos se ele existe debois retornando utilizando o new, caso a classenão exista 
ele interrompera e mostrar uma menssagem na tela, e por fim chamamos a classe animal  juntom o metodo, que tem como o parametro 
colocar um nome em uma classe utilizando uma string e mostrar o resultado na tela.

*/

/*-----------------------------o Factory Paterns Paterns------------------------------------------*/
/*
__Aicionar/Fechar Carrinho - Carrinho
__Calcular Frete - Frete
__Fechar Pedido - Pedido

*/
class Carrinho{
    public function FecharCarrinho(){
        echo '<br>'.'Carrinho Fechado';
    }

}
class Frete{
    public function CalcularFrete(){
        echo 'Frete Calculado';
    }
}
class Pedido{
    public function FecharPedido(){
        echo 'Pedido Fechado';
    }
}
class Loja{
    public function FinalizarComprar(){
     
    }
    public function FecharCarrinho(){
     $carrinho = new Carrinho;
     echo $carrinho->FecharCarrinho();
    }
}

/*obs: Factory Paterns e outro tipo de padrão de strutura que tem como objetivo criar varias classes com metodos diferentes e
reunilas em uma classe só, pois na hora que for fazer a instancia final não precisa instancia todas pois ja vai existir uma classe
propria para fazer isso;
*/
$loja = new Loja;
$loja->FecharCarrinho();


?>