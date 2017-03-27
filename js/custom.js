$(document).ready(function() {
    $("a.menu").on('click', function () {
        
                    $(this).toggleClass('active');
           
            if ( $('#content').css('display')=='none') {
                $('#content').css('display', 'block');
                $('#footer').css('display', 'flex');
                $('#sochide').css('display', 'flex');
                setTimeout(function(){
                    $('.open-menu').slideToggle('300');
                }, 0);
            } else{
                $('.open-menu').slideToggle('300');
                setTimeout(function(){
                        $('#content').css('display', 'none');
                        $('#footer').css('display', 'none');
                        $('#sochide').css('display', 'none');
                }, 500);
            }

        
    });
    $(".menu-items.wells>a").on("click", function () {
        $(this).toggleClass('active');
        $(this).next('ul').slideToggle('300');
        console.log('y');
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
