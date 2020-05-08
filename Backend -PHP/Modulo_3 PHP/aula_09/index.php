<?php
/*------------------------------------Constantes na orientação Objetos----------------------------------*/
class MyClasse
{
    const VALOR = 'Breno'; //declarando uma constante 

    public function __construct()
    {
        echo self::VALOR; //chamando uma contante no contrutor
    }
}

/*se por acaso mudacimos uma contante fora da sua declaração tendo como constante a nosssa atual
por exemplo:
self::VALOR = 'Alterando Nome'; 

provavelmente não ira funcionar pois uma contante não pode ser alterada, neste sentido a cima

*/
new MyClasse(); //instanciando
echo MyClasse::VALOR; //chamano direto e danbdo um echo para mostrar o resultado
?>