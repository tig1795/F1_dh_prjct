$(document).ready(function () {
    $('#menu-wplook-main-menu').find('li a').click(function () {
        $('#menu-wplook-main-menu').find('li a').removeClass('active');
        $(this).addClass('active');
        $($(this).closest('li.menu-item').children()[0]).addClass('active');
    });
});