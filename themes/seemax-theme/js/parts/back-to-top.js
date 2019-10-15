$(window).scroll(function() {
    if ($(this).scrollTop() >= 500) {
      $('.backToTop').addClass('visible-btn');
    } else {
      $('.backToTop').removeClass('visible-btn');
    }
});

$('.backToTop').on("click",function(){
      $("html, body").animate({ scrollTop: "0px" });
});
