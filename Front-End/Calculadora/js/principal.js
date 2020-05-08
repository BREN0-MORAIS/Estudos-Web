$(function(){
    coletarNumero();
    ligarDesligar();
 
 

});

function ligarDesligar()
{
 
$('form').click(function(){

    $('.power').click(function(){
        $('.vlLabel').toggle();
        estiloLigado();    
    })
    return false;
 });           
}

    function estiloLigado(){
    var ligarTela = $('.tela').css('background','#cfdc9c');
    var blocoPreto = $('.BlocoPreto').css('background',' #5b7679');
    var botoes = $('button').css('color','#f1d966');

}


function coletarNumero(){

    $('.num').click(function()
    {   
        $('.vlLabel').text($('.vlLabel').text() + $(this).text())
    });

}









 