function getVote(int) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("poll").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "../php/votos.php?vote=" + int, true);
    xmlhttp.send();
}



$(document).ready(function() {
    $("#comentar").click(function() {
        $("#comentario").html(
            '<div class="container fluid">' +
            '<div class="row">' +
            '<div class="col-2"></div>' +
            '<div class="card text col-8">' +
            '<div class="card-body">' +
            '<h3>Comentar</h3>' +
            '<form action="../php/crearpost.php" method="post">' +
            '<div class="post">' +
            '<textarea required class="form-control" rows="7" cols="50" style="resize: none" name="Contenido post" placeholder="Escribe tu comentario aquí" id="post-message"></textarea>' +
            '</div>' +
            '<br>' +
            '<button type="button" class="btn btn-success" id="post-comentario">Comentar</button>' +
            '</form>' +
            '</div>' +
            '</div>' +
            '<div class="col-2"></div>' +
            '</div>' +
            '</div>'
        ).toggle();

    });

    $("#post-comentario").click(function() {
        $("#comentario").prepend(
            '<div class="card text">' +
            '<div class="card-body container-fluid">' +
            '<div class="row">' +
            '<div class="acciones col-1">' +

            '<div class="votopositivo"><i class="fas fa-thumbs-up"></i></div>' +
            '<div class="votonegativo"><i class="fas fa-thumbs-down"></i></div><br>' +
            '<div class="comentar" id="comentar"><i class="fas fa-comment"></i></div>' +

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
        ).toggle();
    });

    $("#post-button").click(function() {
        $("#post-done").prepend(
            '<div class="card text">' +
            '<div class="card-body container-fluid">' +
            '<div class="row">' +
            '<div class="acciones col-1">' +

            '<div class="votopositivo"><i class="fas fa-thumbs-up"></i></div>' +
            '<div class="votonegativo"><i class="fas fa-thumbs-down"></i></div><br>' +
            '<div class="comentar"><i class="fas fa-comment"></i></div>' +

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