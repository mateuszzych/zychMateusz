 $(document).ready(function() {
    $('.message').one("click", function() {
            $('.form-validate').slideToggle("fast");
    });


$(".message").click(function() {
    $('html,body').animate({
        scrollTop: $('.form-validate').offset().top},
        'slow');

    if($(window).width() < 1050 && $(window).width() > 576)
{
    $(".mario").css("margin-top", "350px");
} else {
	 $(".mario").css("margin-top", "0px");
}
   

});

//$(window).resize(function() {
  //  $('form').height($(window).height());

//});
//$(window).trigger('resize');



});

