// Case Modal Window
$('body.not-active .showcase figure').click(function(e) {
    console.log("Click");
    $(this).addClass("active");
    $('body').addClass("picture-active");
    $('body').removeClass("not-active");
});


$('.close-modal').click(function(e) {
    $('.showcase figure').removeClass("active");
    $('body').removeClass("picture-active");
    $('body').addClass("not-active");
});