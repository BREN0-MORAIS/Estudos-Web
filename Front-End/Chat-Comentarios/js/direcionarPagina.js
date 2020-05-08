$(function(){

    redirecionarPainel();
})

function redirecionarPainel(){

    $.ajax({'url':'index.html'}).done(function(data){
        $('body').append(data);
     
        })

    }
