jQuery(($) => {

    $('.target-link').click(function (e) {
        $('.detail-main-big-wrapper').removeClass('active');
        const target = $(this).data('target');
        $(target).addClass('active');
        $('html, body').animate(
            {
                scrollTop: $(target).offset().top - $('#custom-header').height(),
            },
            1000
        );
    });
    $('.js-close-detail-wrapper').click(function () {
        $('.detail-main-big-wrapper').removeClass('active');
    });
    
});
