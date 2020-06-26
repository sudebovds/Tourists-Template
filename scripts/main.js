$(document).ready(function(){
    const slider = $("[data-slider]");
    const buttons = $("[data-button]");
    const popups = $("[data-popup]");
    const nextSlideArrow = $("[data-switcher]");

    slider.each(function(){
        let cur = $(this).data("slider");

        switch(cur){
            case "reviews": 
                $(this).owlCarousel({
                    items: 2, 
                    nav: true,
                    responsive:{
                        1200: {
                            items: 2
                        },
                        350: {
                            items: 1,
                            nav: false
                        }
                    }
                });
            case "main-slider": 
                $(this).owlCarousel({
                    items: 1, 
                    autoplay: true,
                    autoplayTimeout: 9000,
                    autoWidth: false,
                    center: true,
                    loop: true,
                    nav: true
                });

            case "detail-sld":
                $(this).owlCarousel({
                    items: 1,
                    nav: true
                });

            case "popular-mobile":
                $(this).owlCarousel({
                    items: 1
                });

            default: return cur = null;
        };
    });
    
    $(nextSlideArrow).on("click", () => {
        /*$("[data-slider='main-slider']").trigger("next.owl.carousel");*/
        $('html,body').stop().animate({ scrollTop: $('[data-anchor="catalog"]').offset().top }, 1000);
        e.preventDefault();
    })

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

  

