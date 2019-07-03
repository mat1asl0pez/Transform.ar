$(document).ready(function () {
    $('#link1').hide();
});
$(document).ready(function () {
    $('#link2').hide();
});
$(document).ready(function () {
    $('#link3').hide();
});
$(document).ready(function () {
    $('#link4').hide();
});
$(document).ready(function () {
    $('#link5').hide();
});
$(document).ready(function () {
    $('#link6').hide();
});

$(document).ready(function () {
    $("#ley").click(function () {
        $("#link1").show();
    });
    $("#hormonizacion").click(function () {
        $("#link2").show();
    });
    $("#interv").click(function () {
        $("#link3").show();
    });
    $("#consul").click(function () {
        $("#link4").show();
    });
    $("#prof").click(function () {
        $("#link5").show();
    });
    $("#espacios").click(function () {
        $("#link6").show();
    });

/*****************************/

    if ($("#actividad").is(":visible")) {
        $("#actividad").hide();
        $("#inboxdestino").show();
    } else {
        $("#actividad").show();
        $("#inboxdestino").hide();
    }
    if ($("#crearmensaje").is(":visible")) {
        $("#crearmensaje").hide();
    }
});

$(document).on("click", "#enviarmensajedestino", function () {
    if ($("#inboxdestino").is(":visible")) {
        $("#inboxdestino").hide();
        $("#crearmensaje").show();
    }
});

$("#cerrar").click(function () {
    $("#crearmensaje").hide();

    $("#inboxdestino").show()
});
