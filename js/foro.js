$(document).ready(function () {




    $("#comentar").click(function () {
        $("#comentario").html(
            '<div class="card text bg-primary mb-3">' +
            '<i class="fas fa-times" id="cerrar"></i> '+
            '<div class="card-body">' +
            '<div class="Tpost">' +
            '<input type="text" name="Titulo Post" id="post-title">' +
            '</div>' +
            '<div class="Cpost">' +
            '<textarea name="Contenido post" id="post-message"></textarea>' +
            '<div class="container-fluid row">' +
            '<div class="offset-md-10 offset-sm-6">' +
            '<br>'+
            '<button type="submit" class="button" id="post-button"><span id="contenidoPostear">Postear</span></button>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
            ).toggle();
         
     );


    $("#post-button").click(function () {
        $("#post-done").prepend(
            '<div class="card text">' +
            '<div class="card-body container-fluid">' +
            '<div class="row">' +
            '<div class="acciones col-1">' +
            
            '<div class="votopositivo"><i class="fas fa-thumbs-up"></i></div>'+
            '<div class="votonegativo"><i class="fas fa-thumbs-down"></i></div><br>'+
            '<div class="comentar"><i class="fas fa-comment"></i></div>'+

            '</div>' +

            '<div class="col-6">' +
            '<h4 class="card-title">' +
            
            $("#post-title").val() +
            '</h4>' +
            '<p class="card-text">' +
            $("#post-message").val() +
            '</p>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="card-header">Posteado por <?php echo $columna["Username"];?> hace <?php echo $columna["Fecha"];?></div>' +
            '</div>'
            
        );


    });
});


