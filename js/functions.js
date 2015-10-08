
$(document).ready(function(){
    
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })

    $("#button-top").click(function() {
        $("#form").toggle();
    });

    $(".clear").on("click",function(){
      $("form div").removeClass("error");
      $("form label").removeClass("error");
      $("form")[0].reset();
});

    /*$('#form').submit(function () {
        $("#form").toggle();
        return false;
    });*/

});

$(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
        $("form div").removeClass("error");
        $("form label").removeClass("error");
        $("form")[0].reset();
        $("#form").toggle();
    }
});
