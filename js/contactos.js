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

// A $( document ).ready() block.
$(document).ready(function () {
    $("#showme1").click(function () {
        $("#link1").fadeToggle();
    });
    $("#showme2").click(function () {
        $("#link2").fadeToggle();
    });
    $("#showme3").click(function () {
        $("#link3").fadeToggle();
    });
    $("#showme4").click(function () {
        $("#link4").fadeToggle();
    });
    $("#showme5").click(function () {
        $("#link5").fadeToggle();
    });
});