$(document).ready(function () {

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
            '<div class="card-header">Posteado por USUARIOID hace DATETIME</div>' +
            '</div>'
            
        );
       
    });
});


