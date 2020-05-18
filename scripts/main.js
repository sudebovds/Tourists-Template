$(document).ready(function(){
    const slider = $("[data-slider]");
    const buttons = $("[data-button]");
    const popups = $("[data-popup]");

    slider.each(function(){
        let cur = $(this).data("slider");
        if(cur == "reviews"){
            $(this).owlCarousel({
                items: 2
            });
        }
        if(cur == "main-slider"){
            $(this).owlCarousel({
                items: 1, 
                autoplay: true,
                autoplayTimeout: 9000
            });
        }
        if(cur == "detail-sld"){
            $(this).owlCarousel({
                items: 1,
                nav: true
            });
        }        
    });

    $(buttons).on("click", function(){
        $(popups).addClass("popup-active");
        $("body").addClass("no-overflow");
    });

    $(".popup__header_close").on("click", function(){
        $(popups).removeClass("popup-active");
        $("body").removeClass("no-overflow");
    });
    $(".popup").on("click", function(event){
        $(popups).removeClass("popup-active");
        $("body").removeClass("no-overflow");
    });
    $(".popup__inner").on("click", function(event){
        event.stopPropagation();
    });
});

  

