$(document).ready(function(){

    $.ajax({
        "url" : "http://localhost/Progetti/php-ajax-dischi/server.php",
        "method": "GET",
        "success": function(risposta){
            var source = document.getElementById("entry-template").innerHTML;
            var template = Handlebars.compile(source);
            for (var i = 0; i < risposta.length; i++){
                var context = {
                    title: risposta[i].title,
                    author: risposta[i].author,
                    year: risposta[i].year,
                    poster: risposta[i].poster
                  };
                var html = template(context);
                $(".container").append(html);
            }
        },
        "error": function(){
            alert("ATTENZIONE! Errore");
        }

    });


});
