define(['jquery'], function ($) {
    ;(function ($) {
        $.fn.maxHeightItems = function () {
            var hightest = 0;
            $(this).find('.product-item').each(function () {
                var hight = $(this).height();
                if (hight > hightest) {
                    hightest = hight;
                }
            });

            $(this).find('.product-item-info').css({'height': hightest})
        };

    })(jQuery);
});
