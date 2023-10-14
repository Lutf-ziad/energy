let open = false;
var lastScroll = 0;
var $ = jQuery.noConflict();
function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this,
            args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

class Swipers {
    constructor() {
        if ($('#part-brands-section-slider').length > 0)
            this.partsSwiper = new Swiper('#part-brands-section-slider', {
                slidesPerView: 6,
                slidesPerGroup: 6,
                spaceBetween: 15,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 6,
                        slidesPerGroup: 6,
                    },
                    700: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    250: {
                        slidesPerView: 2.4,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#search-parts-section-slider').length > 0)
            this.searchpartsSwiper = new Swiper('#search-parts-section-slider', {
                slidesPerView: 6,
                slidesPerGroup: 6,
                spaceBetween: 15,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 6,
                        slidesPerGroup: 6,
                    },
                    700: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    250: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#search-oil-section-slider').length > 0)
            this.searchoilSwiper = new Swiper('#search-oil-section-slider', {
                slidesPerView: 6,
                slidesPerGroup: 6,
                // spaceBetween: 15,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 6,
                        slidesPerGroup: 6,
                    },
                    700: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    250: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#search-brands-section-slider').length > 0)
            this.searchbrandsSwiper = new Swiper('#search-brands-section-slider', {
                slidesPerView: 6,
                slidesPerGroup: 6,
                spaceBetween: 15,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 6,
                        slidesPerGroup: 6,
                    },
                    700: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    250: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#highlighted-section-slider').length > 0)
            this.highlightedSwiper = new Swiper('#highlighted-section-slider', {
                slidesPerView: 4,
                slidesPerGroup: 4,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    700: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                    250: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#highlighted-similar-section-slider').length > 0)
            this.highlightedSimilarSwiper = new Swiper('#highlighted-similar-section-slider', {
                slidesPerView: 4,
                slidesPerGroup: 4,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    700: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                    250: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#highlighted-product-section-slider').length > 0)
            this.highlightedproductSwiper = new Swiper('#highlighted-product-section-slider', {
                slidesPerView: 4,
                slidesPerGroup: 4,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    700: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                    250: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#news-section-slider').length > 0)
            this.newsSwiper = new Swiper('#news-section-slider', {
                slidesPerView: 1.3,
                spaceBetween: 60,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                    },
                    700: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#news-paragraph-slider').length > 0)
            this.newsparagraphSwiper = new Swiper('#news-paragraph-slider', {
                slidesPerView: 1,
                centeredSlides: true,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                centeredSlides: true,
                breakpoints: {
                    1200: {
                        slidesPerView: 2,
                        slidesPerGroup: 1,
                        centeredSlides: true,
                        spaceBetween: 50,
                    },
                    993: {
                        slidesPerView: 1.5,
                        slidesPerGroup: 1,
                        centeredSlides: true,
                        spaceBetween: 50,
                    },
                    700: {
                        slidesPerView: 1.4,
                        slidesPerGroup: 1,
                        centeredSlides: true,
                        spaceBetween: 50,
                    },
                },
            });

        if ($('#media-gallery-slider').length > 0)
            this.mediagallerySwiper = new Swiper('#media-gallery-slider', {
                slidesPerView: 1,
                spaceBetween: 60,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    1025: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                        spaceBetween: 30,
                    },

                    993: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                        spaceBetween: 0,
                    },
                    700: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });
        if ($('#progress-slider').length > 0)
            this.progressSwiper = new Swiper('#progress-slider', {
                slidesPerView: 1,
                spaceBetween: 60,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                    },
                    700: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                },
            });

        if ($('#related-news').length > 0)
            this.relatednewsSwiper = new Swiper('#related-news', {
                slidesPerView: 1,
                spaceBetween: 60,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                    },
                    768: {
                        slidesPerView: 2,
                        slidesPerGroup: 1,
                    },
                },
            });
        if ($('.services-filters-swiper').length > 0)
            this.servicesFiltersSwiper = new Swiper('.services-filters-swiper', {
                direction: 'horizontal',
                slidesPerView: 'auto',
                freeMode: true,
            });
        if ($('.services-listing-swiper').length > 0)
            this.servicesListingSwiper = new Swiper('.services-listing-swiper', {
                slidesPerView: 2.2,
                spaceBetween: 20,
                grid: {
                    rows: 3,
                },
                breakpoints: {
                    767: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 4,
                    },
                    991: {
                        grid: {
                            rows: 2,
                        },
                        spaceBetween: 15,
                        slidesPerView: 6,
                    },
                },
            });
        if ($('#search-listing-swiper').length > 0)
            this.searchListingSwiper = new Swiper('#search-listing-swiper', {
                slidesPerView: 2.2,
                spaceBetween: 10,
                grid: {
                    rows: 3,
                },
                breakpoints: {
                    767: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 4,
                    },
                    991: {
                        grid: {
                            rows: 1,
                        },
                        spaceBetween: 15,
                        slidesPerView: 6,
                    },
                },
            });
        if ($('.services-list-swiper').length > 0)
            this.servicesListingSwiper = new Swiper('.services-list-swiper', {
                slidesPerView: 1.2,
                spaceBetween: 0,
                grid: {
                    rows: 10,
                },
                breakpoints: {
                    767: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 4,
                    },
                    991: {
                        grid: {
                            rows: 2,
                        },
                        spaceBetween: 15,
                        slidesPerView: 6,
                    },
                },
            });
        if ($('.logo-table-swiper').length > 0)
            this.logoTableSwiper = new Swiper('.logo-table-swiper', {
                slidesPerView: 3,
                spaceBetween: 0,
                grid: {
                    rows: 4,
                },
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    767: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 4,
                    },
                    992: {
                        enabled: false,
                        allowTouchMove: false,
                        spaceBetween: 0,
                    },
                },
            });
        if ($('.brand-table-swiper').length > 0)
            this.brandTableSwiper = new Swiper('.brand-table-swiper', {
                slidesPerView: 3,
                spaceBetween: 0,
                grid: {
                    rows: 3,
                },
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    767: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 4,
                    },
                    992: {
                        enabled: false,
                        allowTouchMove: false,
                        spaceBetween: 0,
                    },
                },
            });
        if ($('#testimonials-section-slider').length > 0)
            this.testimonialsSwiper = new Swiper('#testimonials-section-slider', {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
                breakpoints: {
                    993: {
                        enabled: false,
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                    },
                    700: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                    250: {
                        slidesPerView: 1.08,
                        slidesPerGroup: 1.1,
                        spaceBetween: 60,
                    },
                },
            });
        if ($('.mini-services-listing-swiper').length > 0)
            this.miniServicesListingSwiper = new Swiper('.mini-services-listing-swiper', {
                slidesPerView: 2.2,
                slidesPerGroup: 2,
                spaceBetween: 20,
                breakpoints: {
                    767: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    991: {
                        spaceBetween: 15,
                        slidesPerView: 6,
                        slidesPerGroup: 6,
                    },
                },
                navigation: {
                    nextEl: '.custom-next',
                    prevEl: '.custom-prev',
                },
            });
        if ($('.oil-products-swiper').length > 0)
            this.oilproductsSwiper = new Swiper('.oil-products-swiper', {
                slidesPerView: 2,
                spaceBetween: 16,
                grid: {
                    rows: 1,
                },
                breakpoints: {
                    767: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 6,
                    },
                    991: {
                        grid: {
                            rows: 3,
                        },
                        spaceBetween: 38,
                        slidesPerView: 3,
                    },
                },
            });
        if ($('#combo-company-growth').length > 0)
            this.combocompanygrowthSwiper = new Swiper('#combo-company-growth', {
                slidesPerView: 1.3,
                spaceBetween: 16,
                breakpoints: {
                    767: {
                        slidesPerView: 6,
                    },
                    991: {
                        spaceBetween: 38,
                        slidesPerView: 3,
                    },
                },
            });
        if ($('#combo-company-growth-style2').length > 0)
            this.combocompanygrowthSwiper = new Swiper('#combo-company-growth-style2', {
                slidesPerView: 1.3,
                spaceBetween: 16,
                enabled: true,
                breakpoints: {
                    540: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    991: {
                        spaceBetween: 38,
                        slidesPerView: 3,
                    },
                    1025: {
                        spaceBetween: 38,
                        slidesPerView: 4,
                        enabled: false
                    },
                },
                on: {
                    resize: function () {
                        // swipers.update();
                    },
                }
            });


        if ($('#about-specs-slider').length > 0)
            this.aboutspecsslider = new Swiper('#about-specs-slider', {
                slidesPerView: 2,
                spaceBetween: 8,
                enabled: false,
                breakpoints: {
                    767: {
                        slidesPerView: 2,
                        enabled: true,

                    },
                    991: {
                        spaceBetween: 22,
                        slidesPerView: 3,
                    },
                },
            });

        if ($('.oil-products-swiper').length > 0)
            this.oilproductsSwiper = new Swiper('.oil-products-swiper', {
                slidesPerView: 2,
                spaceBetween: 16,
                grid: {
                    rows: 1,
                },
                breakpoints: {
                    767: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 6,
                    },
                    991: {
                        grid: {
                            rows: 3,
                        },
                        spaceBetween: 38,
                        slidesPerView: 3,
                    },
                },
            });
        if ($('.oil-products-swiper2').length > 0)
            this.oilproductsSwiper2 = new Swiper('.oil-products-swiper2', {
                slidesPerView: 7,
                spaceBetween: 8,
                grid: {
                    rows: 1,
                },
            });
        if ($('#combo-company-growth').length > 0)
            this.combocompanygrowthSwiper = new Swiper('#combo-company-growth', {
                slidesPerView: 1.3,
                spaceBetween: 16,
                breakpoints: {
                    767: {
                        slidesPerView: 6,
                    },
                    991: {
                        spaceBetween: 38,
                        slidesPerView: 3,
                    },
                },
            });
        if ($('#about-specs-slider2').length > 0)
            this.aboutspecsslider = new Swiper('#about-specs-slider2', {
                slidesPerView: 2,
                spaceBetween: 8,
                breakpoints: {
                    767: {
                        slidesPerView: 2,
                    },
                    991: {
                        spaceBetween: 22,
                        slidesPerView: 3,
                    },
                },
            });
        if ($('#blanding-row').length > 0)
            this.aboutspecsslider = new Swiper('#blanding-row', {
                slidesPerView: 1.2,
                spaceBetween: 8,
                breakpoints: {
                    540: {
                        slidesPerView: 1.5,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    991: {
                        spaceBetween: 22,
                        slidesPerView: 4,
                    },
                },
            });
    }
}
function initializeHeader() {
    $(window).on(
        'scroll',
        debounce(function () {
            var scroll = $(window).scrollTop();
            if (scroll > lastScroll + 10) {
                $('header').addClass('scrolling');
                $('.li-sub-wrapper').css('top', '60px');
            } else if (scroll < lastScroll - 10) {
                $('header').removeClass('scrolling');
                $('.li-sub-wrapper').css('top', '141px');
            }
            lastScroll = scroll;
        }, 50)
    );

    $('.mainlist>li').on('mouseenter', function () {
        $('.mainlist li').removeClass('open');
        var sublist = $(this).parent('.mainlist').siblings('.sublist');
        var listItems = $(this).find('.sublist').html();
        $(this).addClass('open');
        sublist.animate({ opacity: '0' }, 200, function () {
            if (listItems != null) {
                sublist.html(listItems);
            } else {
                sublist.html('');
            }
            sublist.animate({ opacity: '1' }, 200);
        });
    });
    $('.mainlist>li').on('mouseleave', function () { });

    $('.main-list-wrapper>li').on('mouseenter', function () {
        var sublistwrapper = $(this).children('.li-sub-wrapper');
        if (sublistwrapper.length <= 0) return;
        sublistwrapper.css('maxHeight', $(sublistwrapper)[0].scrollHeight + 'px');
        $(this).addClass('open');
    });

    $('.main-list-wrapper>li').on('mouseleave', function () {
        var sublistwrapper = $(this).children('.li-sub-wrapper');
        sublistwrapper.css('maxHeight', '0');
        $(this).removeClass('open');
    });

    $('.searchinput').on('keyup', function () {
        $('.search-bar').addClass('open');
        $('.search-result').addClass('open');
    });

    $('.searchinput').blur(function () {
        if (!$(this).val()) {
            $('.search-bar').removeClass('open');
            $('.search-result').removeClass('open');
        }
    });
    $('.profile-link').on('click', function () {
        $(this).addClass('open');
        $('.profile-pannel-trigger').addClass('open');
    });

    $(document).click(function () {
        var container = $('.profile-link');
        if (!container.is(event.target) && !container.has(event.target).length) {
            $('.profile-link').removeClass('open');
            $('.profile-pannel-trigger').removeClass('open');
        }
    });
}
function initializeMobileHeader() {
    if ($('#menuToggle').length <= 0) return;
    $('#menuToggle').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('#sideMenu').addClass('slide');
        $('body').addClass('lock-scroll-mobile');
        open = true;
    });
    $(document).on('click', function (e) {
        if (open && !e.target.closest('#sideMenu')) {
            $('#sideMenu').removeClass('slide');
            $('body').removeClass('lock-scroll-mobile');
            open = false;
        }
    });
}
function initializeBanners() {
    if ($('.banner').length <= 0) return;
    $('.close-banner').on('click', function () {
        $(this).parents('.banner').first().slideUp(200);
    });
    if ($('.filter').length <= 0) return;
    $('.close-banner').on('click', function () {
        $(this).parents('.filter').css('display', 'none');
    });
    $('.reset-filters').on('click', function () {
        $('.filter').css('display', 'none');
        $('.shopping-filters').css('display', 'none');
    });
}
function initializeitem() {
    $('.close-banner').on('click', function () {
        $(this).parents('.item-list').css('display', 'none');
    });
}
function deleteitemorder() {
    $('.close-banner').on('click', function () {
        $(this).parents('.order-item-wrapper').css('display', 'none');
    });
}

function addnewaddress() {
    $('.add-new-address').on('click', function () {
        $('.profile-details').removeClass('div-hide');
        $('.profile-details').addClass('div-show');
    });
}

function hidenewaddress() {
    $('.hide-new-address').on('click', function () {
        $('.profile-details').removeClass('div-show');
        $('.profile-details').addClass('div-hide');
    });
}
function initializeCountdown() {
    if ($('.countdown').length <= 0) return;
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
    $('.countdown').each(function () {
        const countdown = this;
        let birthday = $(this).data('date'),
            countDown = new Date(birthday).getTime(),
            x = setInterval(function () {
                let now = new Date().getTime(),
                    distance = countDown - now;

                $(countdown)
                    .find('.days')
                    .text(Math.floor(distance / day));
                $(countdown)
                    .find('.hours')
                    .text(Math.floor((distance % day) / hour));
                $(countdown)
                    .find('.minutes')
                    .text(Math.floor((distance % hour) / minute));
                $(countdown)
                    .find('.seconds')
                    .text(Math.floor((distance % minute) / second));

                //do something later when date is reached
                if (distance < 0) {
                    $(countdown).find('.days').text(0);
                    $(countdown).find('.hours').text(0);
                    $(countdown).find('.minutes').text(0);
                    $(countdown).find('.seconds').text(0);
                    clearInterval(x);
                }
                //seconds
            }, 0);
    });
}
function handleCustomTabs() {
    if ($('.tabs').length <= 0) return;
    $('.tabs li').on('click', function () {
        if ($(this).hasClass('active')) return;

        $(this).siblings().removeClass('active');
        const tabs = $(this).parents('.tabs').data('controls');
        $(tabs).children().removeClass('active');

        const target = $(this).data('tab');
        const title = $(this).parents('.tabs').data('title');
        if (title != null) $(title).text($(this).text());
        $(target).addClass('active');
        $(this).addClass('active');
    });
}
function initializeCustomCollapsable() {
    if ($('.custom-collapsable').length <= 0) return;
    $('.custom-collapsable .collapsable-header').click(function () {
        const parent = $(this).parent('.custom-collapsable');
        if (parent.hasClass('active')) $(parent).removeClass('active');
        else {
            $(parent).siblings('.custom-collapsable').removeClass('active');
            $(parent).addClass('active');
        }
    });
}
function initializeSwipers() {
    let swipers = new Swipers();
}
function initializeCounter() {
    if ($('.counter').length > 0) {
        $('.counter .decrement').click(function () {
            var count = $(this).next('.count');
            if ($(count).text() > 1) {
                $(count).text(parseInt($(count).text()) - 1);
                if (parseInt($(count).text()) === 1) {
                    $(this).addClass('disabled');
                }
                $(this).siblings('.increment').removeClass('disabled');
                $(this).parent().next().find('.disabled').css('opacity', '100');
            }
        });
        $('.counter .increment').click(function () {
            var count = $(this).prev('.count');
            if ($(count).text() < 99) {
                $(count).text(parseInt($(count).text()) + 1);
                if (parseInt($(count).text()) === 99) {
                    $(this).addClass('disabled');
                }
                $(this).siblings('.decrement').removeClass('disabled');
                $(this).parent().next().find('.disabled').css('opacity', '100');
            }
        });
    }
}
function initializeCustomCollapsible() {
    if ($('.custom-collapsible').length <= 0) return;
    $('.custom-collapsible .collapsible-header').on('click', function () {
        const body = $(this).next('.collapsible-body');
        const parent = $(this).parent('.custom-collapsible');
        if (!$(this).hasClass('open')) {
            $(this).addClass('open');
            $(body).css('maxHeight', $(body)[0].scrollHeight + 'px');
            if ($(parent).hasClass('accordian')) {
                $(parent)
                    .siblings('.custom-collapsible')
                    .each(function (index, collapsible) {
                        $(collapsible).find('.collapsible-body').css('maxHeight', '0px');
                        $(collapsible).find('.collapsible-header').removeClass('open');
                    });
            }
        } else {
            $(body).css('maxHeight', '0px');
            $(this).removeClass('open');
        }
    });
    $('.custom-collapsible .collapsible-header.open ~.collapsible-body').each(function (index, body) {
        $(body).css('maxHeight', body.scrollHeight + 'px');
    });
}
function initializePartsListingViewChange() {
    if ($('.list-type').length <= 0) return;
    $(".list-type input[name='listType']").on('change', function () {
        if ($(this).attr('id') === 'gridView')
            $('.parts-listing-wrapper').removeClass('list-view').addClass('grid-view');
        else $('.parts-listing-wrapper').removeClass('grid-view').addClass('list-view');
    });
}
function initialize_mmSelect() {
    if ($('.mm-select').length <= 0) return;
    $('.mm-select').each(function (index, select) {
        $(select)
            .children('.active-option')
            .on('click', function () {
                $(select).toggleClass('open');
            });
        const options = $(select).children('.option-list');
        $(options)
            .children('li')
            .each(function (index_, li) {
                $(li).on('mousedown', function () {
                    if ($(li).hasClass('no-change')) return;
                    $(select).children('.active-option').html($(this).html());
                    $(this).siblings('li').removeClass('active');
                    $(this).addClass('active');
                });
            });
        $(select).on(
            'focusout',
            debounce(function () {
                $(select).removeClass('open');
            }, 100)
            //added debounce for precaution with a slight delay to allow events within dropdown to trigger
        );
    });
}
function initialize_mmTabs() {
    if ($('.mm-tabs').length <= 0) return;
    $('.mm-tabs').each(function (index, tab) {
        const tabsWrapper = $($(tab).data('controls'));
        $(tab)
            .children('li')
            .each(function (index_, li) {
                $(li).on('mousedown', function () {
                    tabsWrapper.find('.mm-tab').removeClass('active');
                    tabsWrapper.find($(li).data('target')).addClass('active');
                });
            });
    });
}
function initialize_mmTextbox() {
    if ($('.mm-textbox.mm-label-placeholder').length <= 0) return;
    $('.mm-textbox.mm-label-placeholder input,select').on('change', function (event) {
        if (event.target.value == null || event.target.value === '') $(this).parent().removeClass('mm-has-value');
        else $(this).parent().addClass('mm-has-value');
    });
}
function initialize_mmQuickTabs() {
    if ($('.mm-quick-tab').length <= 0) return;
    $('.mm-switch-quick-tabs').on('click', function (event) {
        event.preventDefault(); //stop default behavior
        const target = $(this).data('tab-target');
        $(this).parents('.mm-quick-tab').removeClass('mm-active').siblings(target).addClass('mm-active');
    });
}
function initialize_mmPopup() {
    if ($('.mm-popup').length <= 0) return;
    $('.mm-open-popup').on('click', function (event) {
        event.preventDefault(); //stop default behavior
        const target = $(this).data('popup-target');
        $(target).addClass('mm-active');
        $('body').addClass('mm-body-lock');
    });
    $('.mm-close-popup').on('click', function (event) {
        event.preventDefault(); //stop default behavior
        const target = $(this).data('popup-target');
        $(target).removeClass('mm-active');
        $('body').removeClass('mm-body-lock');
    });
}
function uploadprofilepic() {
    $('.upload-button').on('click', function () {
        $('.profilePic').click();
    });
}

let map;

function initMap() {
    if ($('#map').length <= 0) return;
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8,
    });
}
let backgroundMap;
function initBackgroundMap() {
    if ($('#interactiveMapBackground').length <= 0) return;
    backgroundMap = new google.maps.Map(document.getElementById('interactiveMapBackground'), {
        center: { lat: -33.9, lng: 151.22 },
        zoom: 14,
    });
    const icons = {
        info: {
            icon: '../assets/images/misc-svg/marker.svg',
        },
    };
    const features = [
        {
            position: new google.maps.LatLng(-33.91721, 151.2263),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.91539, 151.2282),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.91747, 151.22912),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.9191, 151.22907),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.91725, 151.23011),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.91872, 151.23089),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.91784, 151.23094),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.91682, 151.23149),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.9179, 151.23463),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.91666, 151.23468),
            type: 'info',
        },
        {
            position: new google.maps.LatLng(-33.916988, 151.23364),
            type: 'info',
        },
    ];

    // Create markers.
    for (let i = 0; i < features.length; i++) {
        const marker = new google.maps.Marker({
            position: features[i].position,
            icon: icons[features[i].type].icon,
            map: backgroundMap,
        });
        const contentString =
            '<div class="marker-popup-wrapper">' +
            '<div class="marker-popup-main-content">' +
            '<div class="top-half">' +
            '<div class="logo-wrapper">' +
            '<img src="/assets/images/petromin-logo.svg" alt="petromin logo"/>' +
            '</div>' +
            '<p class="text-wrapper">' +
            'Riyadh, <span>king fahd road</span>' +
            '</p>' +
            '</div>' +
            '<div class="bottom-half">' +
            'closes in 1 hr' +
            '</div>' +
            '</div>' +
            '<a class="marker-popup-directions-link">' +
            '<img src="/assets/images/misc-svg/directions.svg" alt="directions icon"/>' +
            '</a>' +
            '</div>';
        const infowindow = new google.maps.InfoWindow({
            content: contentString,
        });

        marker.addListener('click', () => {
            infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false,
            });
        });
    }
}

function initMonthYearField() {
    if ($('#ccmonth').length <= 0 || $('#ccyear').length <= 0) return;
    const monthInput = document.querySelector('#ccmonth');
    const yearInput = document.querySelector('#ccyear');

    const focusSibling = function (target, direction, callback) {
        const nextTarget = target[direction];
        nextTarget && nextTarget.focus();
        // if callback is supplied we return the sibling target which has focus
        callback && callback(nextTarget);
    };

    // input event only fires if there is space in the input for entry.
    // If an input of x length has x characters, keyboard press will not fire this input event.
    monthInput.addEventListener('input', (event) => {
        const value = event.target.value.toString();
        // adds 0 to month user input like 9 -> 09
        if (value.length === 1 && value > 1) {
            event.target.value = '0' + value;
        }
        // bounds
        if (value === '00') {
            event.target.value = '01';
        } else if (value > 12) {
            event.target.value = '12';
        }
        // if we have a filled input we jump to the year input
        2 <= event.target.value.length && focusSibling(event.target, 'nextElementSibling');
        event.stopImmediatePropagation();
    });

    yearInput.addEventListener('keydown', (event) => {
        // if the year is empty jump to the month input
        if (event.key === 'Backspace' && event.target.selectionStart === 0) {
            focusSibling(event.target, 'previousElementSibling');
            event.stopImmediatePropagation();
        }
    });
}

const inputMatchesPattern = function (e) {
    const { value, selectionStart, selectionEnd, pattern } = e.target;

    const character = String.fromCharCode(e.which);
    const proposedEntry = value.slice(0, selectionStart) + character + value.slice(selectionEnd);
    const match = proposedEntry.match(pattern);

    return (
        e.metaKey || // cmd/ctrl
        e.which <= 0 || // arrow keys
        e.which == 8 || // delete key
        (match && match['0'] === match.input)
    ); // pattern regex isMatch - workaround for passing [0-9]* into RegExp
};

document.querySelectorAll('input[data-pattern-validate]').forEach((el) =>
    el.addEventListener('keypress', (e) => {
        if (!inputMatchesPattern(e)) {
            return e.preventDefault();
        }
    })
);

function initServicesDetailsWrapper() {
    if ($('.detail-main-wrapper').length <= 0) return;
    $('.js-detail-trigger').click(function () {
        $('.detail-main-wrapper').removeClass('active');
        const target = $(this).data('target');
        $(target).addClass('active');
    });
    $('.js-close-detail-wrapper').click(function () {
        $('.detail-main-wrapper').removeClass('active');
    });
}

function handlePopUp() {
    $('.open-popup-link').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedBgPos: true,
        fixedContentPos: false,
        fixedContentPos: true,
        iframe: {
            markup:
                '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" width="100%" frameborder="0" allowfullscreen></iframe>' +
                '</div>',

            srcAction: 'iframe_src',
        },
    });
    // video popup
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        preloader: true,
        fixedBgPos: true,
        fixedContentPos: false,
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1&rel=0',
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: '//player.vimeo.com/video/%id%?autoplay=1',
                },
            },
            srcAction: 'iframe_src',
        },
    });
}

$(document).ready(function () {
    initializeCounter();
    initializeBanners();
    initializeCountdown();
    initializeSwipers();
    handleCustomTabs();
    initializeHeader();
    initializeMobileHeader();
    initializeCustomCollapsible();
    initializePartsListingViewChange();
    initialize_mmSelect();
    initialize_mmTabs();
    initialize_mmTextbox();
    initialize_mmQuickTabs();
    initialize_mmPopup();
    uploadprofilepic();
    initializeitem();
    initMonthYearField();
    deleteitemorder();
    addnewaddress();
    hidenewaddress();
    initServicesDetailsWrapper();
    handlePopUp();
});
