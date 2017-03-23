$(document).ready(function() {
    $("a.menu").on('click', function () {
        $(this).toggleClass('active');
        $('.open-menu').slideToggle('300');
    });
    $(".menu-items>a").on("click", function () {
        $(this).toggleClass('active');
        $(this).next('ul').slideToggle('300');
    });
});
