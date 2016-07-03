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
        },

        accordionMenu: function() {
            var itemHasChild = $('.menu-item-has-children > a');
            if(itemHasChild.length) {
                itemHasChild.off('click').on('click', function(e) {
                    e.preventDefault();
                    if($(this).hasClass('open-sub')) {
                        $(this).removeClass('open-sub');
                    }
                    else {
                        $(this).addClass('open-sub');
                    }
                    $(this).parent().siblings().find('.open-sub').removeClass('open-sub');
                    $(this).parent().siblings().find('.sub-menu').slideUp(300);
                    $(this).parent().find('.sub-menu').slideUp(300);
                    if(!$(this).next('.sub-menu').is(':visible')) {
                        $(this).next('.sub-menu').slideDown(300);
                    }
                });
            }
        },

        backTop: function() {
            var windowHeight = $(window).height(),
                backTopBtn = $('.back-top');
            if(backTopBtn.length) {
                backTopBtn.on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: 0
                    }, 1000);
                });
                $(window).on('scroll', function() {
                    if($(window).scrollTop() > windowHeight) {
                        backTopBtn.css('bottom', 0);
                    }
                    else {
                        backTopBtn.css('bottom', '-40px');
                    }
                });
            }
        },

        bootstrapSelect: function() {
            var select = $('select');
            if(select.length) {
                select.selectpicker();
            }
        },

        searchToggle: function() {
            var toggleSearch = $('.toggle-search'),
                searchItem = $('.search-item');
            if($(window).width() < 1201) {
                if(toggleSearch.length) {
                    toggleSearch.off('click').on('click', function() {
                        $(this).next('.search-item').slideToggle(300);
                        $(this).next('.search-item').find('.form-text').focus();
                    });
                    setTimeout(function() {
                        var formClose = $('.form-close');
                        if(formClose.length) {
                            formClose.off('click').on('click', function() {
                                $(this).parents('.search-item').slideUp(300);
                            });
                        }
                    }, 300);
                }
            }
            else {
                searchItem.show();
            }
        },

        closeSidebar: function() {
            var body = $('body'),
                rightContent = $('.right-content');
            if($(window).width() < 1201) {
                body.addClass('no-sidebar');
                rightContent.off('lick').on('click', function() {
                    if(!body.hasClass('no-sidebar')) {
                        body.addClass('no-sidebar');
                    }
                });
            }
            else {
                body.removeClass('no-sidebar');
            }
        },
        
        hoverImageProduct: function () {
            $( '.thumbnails a img' ).on('mouseover', function() {
                    var photo_fullsize = $( this ).attr( 'srcset' );
                    $( '.woocommerce-main-image img' ).attr( 'srcset', photo_fullsize );
                }
            );
        },

        filterProduct: function () {
            $.filtrify("product-category", "placeHolder");
        }
    };

    /* Window ready function */
    $(window).ready(function () {
        // Close sidebar
        customJS.closeSidebar();

        // Sidebar toggle
        customJS.sidebarToggle();

        // Bootstrap select
        customJS.bootstrapSelect();
        
        // Hover product image
        customJS.hoverImageProduct();

        //Filter product
        customJS.filterProduct();
    });

    /* Window load function */
    $(window).load(function () {
        // Accordion menu
        customJS.accordionMenu();

        // Back top button
        customJS.backTop();

        // Search toggle
        customJS.searchToggle();
    });

    /* Window resize function */
    $(window).resize(function () {
        // Close sidebar
        customJS.closeSidebar();

        // Search toggle
        customJS.searchToggle();
    });
})(jQuery);