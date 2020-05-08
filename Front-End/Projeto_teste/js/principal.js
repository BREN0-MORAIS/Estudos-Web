$(function(){

    VerificarClikMenu();
    
});


function VerificarClikMenu()
{
    $('a').click(function()
    { 
         var  href = $(this).attr('href'); 
         /*pegaa o proprio elemento clicado  exemplo: a href vai pegar o link usando
          o this você posde pegar  todos oslinks dos elemento sem repetir o odigo*/
      $.ajax({
            'url':href //pega a url do elemento 
           
        }).done(function(data){ //tranfere os dados o elemento para a variavel data//pode ser qualquer variavel
       
            $('#container').html(data); //aplica outras pagina sem atualizar na pagina principal utilizando ajax
        })
        return false; //retorna falso para o a não atualizar a pagina
     
    });
}