$(document).ready(function() {

    if(window.location.hash.su == "#menu") {
        $('a.menu').trigger('click');
    }

    var onBack = function (e)
    {
        // history.pushState(null, document.title, location.href);
        // e.stopPropagation(); //stop event
        // history.popState();
        $('a.menu, .menu-burger').trigger('back');
    }

    var menuState = { state: "menu" };

    // history.replaceState({ state: "site" }, document.title, location.href);
    // window.addEventListener('popstate', onBack, false);

    $("a.menu, .menu-burger").on('click back', function (e) {
        if($(this).hasClass("animating")) return;

        // console.log(e);

        $(this).addClass("animating");

            if ( $(this).hasClass('active')) {
                $(this).removeClass('active');
                $('main, footer, #sochide').show();

                // Fix bug animation after closing menu
                $('.fadeanimate').removeClass("novisible visible animated fadeInUp");

                setTimeout(function(){
                    $('.open-menu').slideToggle('300', function() { $("a.menu, .menu-burger").removeClass("animating"); });

                }, 0);
                // window.removeEventListener('popstate', onBack, false);
                // if(e.type == "click") {
                //   window.history.go(-1);
                //   console.log("go -1");
                // }

            } else{
                $(this).addClass('active');

                $('.open-menu').slideToggle('300', function() {
                    $('main, footer, #sochide').hide();

                    // history.replaceState(null, document.title, './#menu');

                    //good?
                    // history.pushState(menuState, document.title,  './#menu'); //location.href);

                    $("a.menu, .menu-burger").removeClass("animating");
                });
                //setTimeout(function(){
                //        $('main').css('display', 'none');
                //        $('footer').css('display', 'none');
                //        $('#sochide').css('display', 'none');
                //}, 500);
            }

            // Fix bug animation after closing menu
            mainPageAnimate();

    });

    $(".menu-items.wells>a").on("click", function () {
        $(this).addClass('clicked')
        $(this).toggleClass('active');
        //$(this).next('ul').slideToggle('300');
        console.log('y');
    });

    // $(window).on('resize load', function() {
    //     if ($(window).width() <= 992) {
    //         $(".menu-items.wells>a").not('.clicked').removeClass('active');
    //     }
    //     else {
    //         $(".menu-items.wells>a").not('.clicked').addClass('active');
    //     }
    // });

    $(window).on('scroll', function() {
        if ($(window).width() >= 767) {

            if($('.callme').length) {
                var hT = $('.callme').offset().top,
                    hH = $('.callme').outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
                //console.log((hT-wH) , wS);

                if( $('.scroll').hasClass('animating')) return;
                if (wS > (hT-wH)){
                    $('.scroll').addClass('animating').fadeOut(200, function() {
                        $(this).removeClass('animating');
                    });
                }
                else {
                    $('.scroll').addClass('animating').fadeIn(500, function() {
                        $(this).removeClass('animating');
                    });
                }
            }
        }
    });

/*
    $(".right_mobile").on("click", function () {
        if ( $('.right').css('display')=='none') {
                $('.right').css('display', 'block');
                $('.right').addClass('mobile');

        } else{
                $('.right').css('display', 'none');
        }
    });
    */

    /* call submit form from old design */
    $('.js-h-form').on('click',function(e){
        e.preventDefault();
        $(this).siblings('form').toggle(300);
    });

    $('#record-form').find('.sclose').on('click',function(){
        $(this).parent('form').hide(300);
    });


/*
MAIN blocks animate
http://www.web2feel.com/tutorial-for-animated-scroll-loading-effects-with-animate-css-and-jquery
*/

    if( window.scrollY < 100 )
        mainPageAnimate();
    else
        return;


    function mainPageAnimate() {

        $('.fadeanimate').addClass('novisible')
                .viewportChecker({
                    classToAdd: 'visible animated fadeInUp',
                    offset: 100
                   });

        $('.fadeanimate_simple').addClass('novisible')
            .viewportChecker({
                classToAdd: 'visible animated fadeIn',
                offset: 100
               });

    }


});
