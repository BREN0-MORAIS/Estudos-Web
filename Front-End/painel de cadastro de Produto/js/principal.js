$( function()
{
tabCadastrar();
limparForm();
limparTabela();
ModoEscuro();
exibiFormulario();




});



function limparTabela(){$('.limparaTabela').on('click',function()
{
var vazio = " ";
$('.tdvazio').text(vazio);
var entrada = $('input').val();
})
}


function exibiFormulario()
{$('.exibirFrm').click( function(){
    $('.conf').toggle();});
}

function tabCadastrar(){
$('.btncadastrar').click(function()
{
   
    var produto = $('.produto').val();
    var preco  = $('.preco').val();
    var nome   = $('.nome').val();
    var qtd    = $('.qtd').val();
    var calculoTotal = qtd*preco;
    var total =(calculoTotal);

$('.tabela').append('<tr>'+
'<td class="tdvazio">'+nome+'</td>'+
'<td class="tdvazio">'+produto+'</td>'+
'<td class="tdvazio">'+preco+'</td>'+
'<td class="tdvazio">'+qtd+'</td>'+
'<td class="tdvazio">'+total+'</td>'+
'</tr>');
var entrada = document.querySelectorAll('input');
var tamanhoEntrada = entrada.length;






});
}

function limparForm (){

    $('.btnlimpar').click(function(){

        var produto = $('.produto').val("");
        var preco  = $('.preco').val("");
        var nome   = $('.nome').val("");
        var qtd    = $('.qtd').val("");
    });
}

function ModoEscuro(){ 
$('.btnescuro').click(function()
{
    $('td').css('background','#312f2fd9').css('color','white');
    $('body').css('background','rgb(53, 54, 58)');
    $('input').css('background','gray').css('color','white');
    $('table').css('background','white');
    
});

}


