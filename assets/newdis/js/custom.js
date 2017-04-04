$(document).ready(function() {
    $("a.menu").on('click', function () {
        if($(this).hasClass("animating")) return;

        $(this).addClass("animating");

            if ( $(this).hasClass('active')) {
                $(this).removeClass('active');
                $('main, footer, #sochide').show();
                setTimeout(function(){
                    $('.open-menu').slideToggle('300', function() { $("a.menu").removeClass("animating"); });
                }, 0);
            } else{
                $(this).addClass('active');

                $('.open-menu').slideToggle('300', function() {
                    $('main, footer, #sochide').hide();
                    $("a.menu").removeClass("animating");
                });
                //setTimeout(function(){
                //        $('main').css('display', 'none');
                //        $('footer').css('display', 'none');
                //        $('#sochide').css('display', 'none');
                //}, 500);
            }

        
    });

    $(".menu-items.wells>a").on("click", function () {
        $(this).addClass('clicked')
        $(this).toggleClass('active');
        //$(this).next('ul').slideToggle('300');
        console.log('y');
    });

    $(window).on('resize load', function() {
        if ($(window).width() <= 992) {
            $(".menu-items.wells>a").not('.clicked').removeClass('active');
        }
        else {
            $(".menu-items.wells>a").not('.clicked').addClass('active');
        }
    });

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

    $('.fadeanimate').addClass('novisible').viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
       });






});
