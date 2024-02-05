; (function ($) {
    $(function () {

        /**
         * Toggle Sub Menu
         */
        $('.wp-block-navigation-submenu__toggle, .wp-block-navigation-item.has-child > a').on('click', function (e) {

            if ($(window).width() <= 767) {

                e.preventDefault();
                $(this).parent().children('ul').slideToggle('fast');
            }
        });

        $('.wp-block-navigation a').on('click', function () {

            const href = $(this).attr('href');
            const regex = new RegExp('#');

            if (regex.test(href)) {

                $('.wp-block-navigation__responsive-container-close').trigger('click');
            }
        });

    });
})(jQuery);