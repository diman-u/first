$(document).ready(function() {

    var flagAction;
    var shaverma = $("a.menu");
    shaverma.bind('click', slideMenu);  

    function slideMenu() {
        var _that = $(this);
        var menu = $('.open-menu');
        var content = $('#content');
        var footer = $('#footer');
        var sochide = $('#sochide');

        if( !_that.hasClass('active') ) {

            shaverma.unbind('click', slideMenu);

            menu.slideToggle('300', setClass());
            
        } else {
            
            shaverma.unbind('click', slideMenu);

            content.css('display', 'block');
            footer.css('display', 'flex');
            sochide.css('display', 'flex');

            menu.slideToggle('300', delClass());
        }

        function setClass() {
            setTimeout(function(){

                content.css('display', 'none');
                footer.css('display', 'none');
                sochide.css('display', 'none');

                _that.addClass('active');

                shaverma.bind('click', slideMenu); 

            }, 500);
        }

        function delClass() {
            _that.removeClass('active');
            shaverma.bind('click', slideMenu);  
        }
        
    } 

    $(".menu-items.wells>a").on("click", function () {
        $(this).toggleClass('active');
        $(this).next('ul').slideToggle('300');
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
});
