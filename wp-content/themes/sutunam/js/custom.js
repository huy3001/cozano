/* Custom js */
(function($) {
    var customJS = {
        sidebarToggle: function () {
            var toggleBtn = $('.toggle-menu'),
                sidebar = $('.left-content'),
                body = $('body');
            if(toggleBtn.length) {
                toggleBtn.off('click').on('click', function() {
                    if(body.hasClass('no-sidebar')) {
                        body.removeClass('no-sidebar');
                    }
                    else {
                        body.addClass('no-sidebar');
                    }
                });
            }
        }
    };

    /* Window ready function */
    $(window).ready(function () {
        // Sidebar toggle
        customJS.sidebarToggle();
    });

    /* Window load function */
    $(window).load(function () {

    });

    /* Window resize function */
    $(window).resize(function () {

    });
})(jQuery);