define([
        "jquery",
        "owlCarousel",
        "maxHeightItems",
        "unveil"
    ],
    function ($) {
        /**
         * Theme custom javascript domReady!
         */

        // Fix hover on IOS
        $('body').bind('touchstart', function () {
        });

        $('.page-header .header.content > .header.links').clone().appendTo('#store\\.links');

        /**
         * Owl slider init
         */

        var owl_data = $('div[data-owl="owl-slider"]');
        owl_data.each(function () {
            var dataOwl = $(this);
            dataOwl.find('.owl-carousel').owlCarousel({
                autoplay: dataOwl.data('autoplay') == undefined ? false : dataOwl.data('autoplay'),
                autoplayHoverPause: dataOwl.data('autoplayhoverpause') == undefined ? false : dataOwl.data('autoplayhoverpause'),
                loop: dataOwl.data('loop') == undefined ? false : dataOwl.data('loop'),
                center: dataOwl.data('center') == undefined ? false : dataOwl.data('center'),
                margin: dataOwl.data('margin') == undefined ? 0 : dataOwl.data('margin'),
                stagePadding: dataOwl.data('stagepadding') == undefined ? 0 : dataOwl.data('stagepadding'),
                nav: dataOwl.data('nav') == undefined ? false : dataOwl.data('nav'),
                dots: dataOwl.data('dots') == undefined ? false : dataOwl.data('dots'),
                mouseDrag: dataOwl.data('mousedrag') == undefined ? false : dataOwl.data('mousedrag'),
                touchDrag: dataOwl.data('touchdrag') == undefined ? false : dataOwl.data('touchdrag'),
                animateOut: 'fadeOut',
                navText: [
                    '<span aria-label="' + 'Previous' + '">Previous</span>',
                    '<span aria-label="' + 'Next' + '">Next</span>'
                ],
                responsive: {
                    0: {
                        items: dataOwl.data('screen0') == undefined ? 1 : dataOwl.data('screen0')
                    },
                    480: {
                        items: dataOwl.data('screen480') == undefined ? 1 : dataOwl.data('screen480')
                    },
                    640: {
                        items: dataOwl.data('screen640') == undefined ? 1 : dataOwl.data('screen640')
                    },
                    1024: {
                        items: dataOwl.data('screen1024') == undefined ? 1 : dataOwl.data('screen1024')
                    },
                    1280: {
                        items: dataOwl.data('screen1280') == undefined ? 1 : dataOwl.data('screen1280')
                    },
                }
            })
        });

        /**
         * Owl slider grid layout 1 column
         */

        $('.page-layout-1column .grid-slider-full .owl-carousel').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            dots: false,
            slideBy: 1,
            mouseDrag: false,
            touchDrag: true,
            responsive: {
                0: {
                    items: 2,
                    slideBy: 2
                },
                480: {
                    items: 2,
                    slideBy: 2
                },
                640: {
                    items: 3,
                    slideBy: 3
                },
                1024: {
                    items: 4,
                    slideBy: 4

                },
                1280: {
                    items: 5,
                    slideBy: 5
                }
            }
        });

        /**
         * Set height items to max height
         */

        /*$('div[data-max-height="max-height-grid-items"]').maxHeightItems();*/

        /**
         * Label product
         */

        $('.products-grid .product-item').each(function () {
            var oldPrice = $(this).find(".old-price .price-wrapper").data('price-amount');
            var specialPrice = $(this).find(".special-price .price-wrapper").data('price-amount');
            var normalPrice = $(this).find(".normal-price .price-wrapper").data('price-amount');

            if (oldPrice && specialPrice) {
                var percent = "-" + Math.round((oldPrice - specialPrice) / oldPrice * 100) + "%";
                $(this).find(".price-box").append("<div class='sale-label'>" + percent + "</div>");
            }

            if (oldPrice && normalPrice) {
                var percent = "-" + Math.round((oldPrice - normalPrice) / oldPrice * 100) + "%";
                $(this).find(".price-box").append("<div class='sale-label'>" + percent + "</div>");
            }
        });

        /**
         * Add show password checkbox for input type password
         */

        $("input[type=\"password\"]").each(function () {
            $(this).parent().addClass("show-element").prepend("<span class='show-pass'></span>");
        });

        $("body").on('click touchstart', '.show-pass', function () {
            $(this).toggleClass("active");
            if ($(this).hasClass("active")) {
                $(this).parent().find("input[type=\"password\"]").attr("type", "text").addClass("pass-text");
                return;
            } else {
                $(this).parent().find("input.pass-text").attr("type", "password").removeClass("pass-text");
                return;
            }

        });

        /**
         * Button Qty
         */
        $('.qty-plus').click(function () {
            var qty = $(this).parent().prev(".tf-qty");
            qty.val(Number(qty.val()) + 1);
            return;
        });

        $('.qty-minus').click(function () {
            var qty = $(this).parent().prev(".tf-qty");
            var value = Number(qty.val()) - 1;
            if (value > 0) {
                $(qty).val(value);
            }
            return;
        });

    });