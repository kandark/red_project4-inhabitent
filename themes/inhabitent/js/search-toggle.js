<<<<<<< HEAD
(function ($) {
    'use strict';

    /**
     * Search Box Toggling
     */

    $(function () {
        $('.search-toggle').on('click', function (event) {
            event.preventDefault();
            const $label = $(this).siblings('label');
            $label.animate({ width: 'toggle' });
            $label.children('[type="search"]').focus();
        });

        $('.search-field').on('blur', function () {
            if ($(this).val() === '') {
                $('.header-search label').animate({ width: 'hide' });
            }
        });
    });
=======
(function ($) {
    'use strict';

    /**
     * Search Box Toggling
     */

    $(function () {
        $('.search-toggle').on('click', function (event) {
            event.preventDefault();
            const $label = $(this).siblings('label');
            $label.animate({ width: 'toggle' });
            $label.children('[type="search"]').focus();
        });

        $('.search-field').on('blur', function () {
            if ($(this).val() === '') {
                $('.header-search label').animate({ width: 'hide' });
            }
        });
    });
>>>>>>> a52e190a3a0aa362037a38dff58674d54990556c
})(jQuery);