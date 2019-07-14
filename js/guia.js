$(document).ready(function() {
    $('#link1').hide();
});
$(document).ready(function() {
    $('#link2').hide();
});
$(document).ready(function() {
    $('#link3').hide();
});
$(document).ready(function() {
    $('#link4').hide();
});


$(document).ready(function() {
    $("#ley").click(function() {
        $("#link1").show();
        $("#link2").hide();
        $("#link3").hide();
        $("#link4").hide();
    });
    $("#hormonizacion").click(function() {
        $("#link2").show();
        $("#link1").hide();
        $("#link3").hide();
        $("#link4").hide();
    });
    $("#interv").click(function() {
        $("#link3").show();
        $("#link1").hide();
        $("#link2").hide();
        $("#link4").hide();
    });
    $("#espacios").click(function() {
        $("#link4").show();
        $("#link1").hide();
        $("#link2").hide();
        $("#link3").hide();
    });
});