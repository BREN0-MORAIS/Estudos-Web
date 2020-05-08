 /*Manual do jQuery*/
 
 //adicionando classe $('.box1').addClass('minhaclasse'); 
  //setInterval({},segundo de intervalo) faz com que você pode executar uma função a cada segundo
  //$().remove() //consegue remover os elemento de uma pagina
  //$().toggle() // consegue mostrar e esconder os elemento e uma pagina
  //$().hide() //esconde os elemento de uma pagina
  //$().show() // mostra os elemento e uma pagina
  //$()append.('<h1>ola</h1>')// cria elemento em uma pagina
  //$().html()  //modifica elemento em uma pagina
  //$().animate({'wifth' : '1000'}) //anima os elemento de uma pagina 
  //  var el = $('#source .texto').clone() //faz um clone ;
  //$('#source .texto').appendTo("#container") //Move o elemento de uma classe para a outra
  /* -----Ajax---
  $.ajax(
    {
        'url':'conteudo.html'
      
    }).done(function (data) 
    {
        $('#container').append(data);
        console.log(data);
       
         $('.a').css('color','red');
        
      });*/



      /*var h = $('h1').text();

      var verifica =  h.match(/(.$?)t/);
   
   
      if(verifica == "t")
      {
          console.log("Encontramos caxorro");
   
      }else
      {
          console.log("não encontramos caxorro");
      }*/

/*---------------------------AJAX-------------------------------------*/
/*function VerificarClikMenu()
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
} */