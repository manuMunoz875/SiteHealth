$(window).scroll(function() {
    if ($("#menu").offset().top > 56) {
        $("#menu").addClass("bgScroll");
    } else {
        $("#menu").removeClass("bgScroll");
    }
});

$("#js-btnLeng-esp").click(function(){
    $(".js-idioma-eng").removeClass("hideEsp");
    $(".js-idioma-esp").addClass("hideEsp");
    $("#js-btnLeng-esp").addClass("hideEsp");
    $("#js-btnLeng-eng").removeClass("hideEsp");

});

$("#js-btnLeng-eng").click(function(){
    $(".js-idioma-esp").removeClass("hideEsp");
    $(".js-idioma-eng").addClass("hideEsp");
    $("#js-btnLeng-eng").addClass("hideEsp");
    $("#js-btnLeng-esp").removeClass("hideEsp");

});