if ($(window).width() < 992) {
    $('.header-nav>ul>li.has-submenu>a').on('click', function () {
        $(this).next('.header-nav-dd-wrap').slideToggle();
        $(this).parent('li').toggleClass('opened').siblings().removeClass('opened');
        $(this).parent('li').siblings().find('.header-nav-dd-wrap').slideUp();
        return false;
    });
} else {
    //alert('More than 960');
}