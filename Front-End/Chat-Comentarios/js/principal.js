$(function()
{

$('.btn-comentar').click(function()
{  
   $('p, hr , .btn-comentar').toggle();
   $('input, .btn-enviar-comentario , .comentario').show();
   
});



$('.input-comentario').keypress(function(e) {
    if(e.which == 13)$('.btn-enviar-comentario').click();
});


$('.btn-enviar-comentario').click(function(){
  var entradaComentario = $('.input-comentario').val();
  $('.comentario').append('<section class=".comentario">'+'<div class="coment">'+
  '<label>'+entradaComentario+'</label>'+
'</div>'+'</section>');
});





})

/*

   <div>
            <input type="text" class="input-comentario">
            <button class="btn-enviar-comentario">></button>
        </div>  
            <button class="btn-comentar">Comentarios</button>
          </div> 
*/