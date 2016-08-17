/* Custom js */
(function($) {
    // Global variables
    var $desktop = 1200,
        $laptop = 992,
        $tablet = 768;

    // Global functions
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
            var toggleSearch = $('.search-form .toggle-search'),
                searchItem = $('.search-form .search-item');
            if($(window).width() < $desktop + 1) {
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
                $(document).on('click', function(e) {
                    var target = e.target;
                    if (!$(target).is(toggleSearch, searchItem) && !$(target).parents().is(toggleSearch, searchItem)) {
                        searchItem.slideUp(300);
                    }
                });
            }
            else {
                searchItem.show();
            }
        },

        closeSidebar: function() {
            var body = $('body'),
                rightContent = $('.right-content');
            if($(window).width() < $desktop + 1) {
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

        moreImageProduct: function () {
            $( '.thumbnails a img').off('click').on('click', function() {
                    var photo_fullsize = $(this).attr('srcset');
                    $('.woocommerce-main-image img').attr( 'srcset', photo_fullsize );
                }
            );
        },

        filterProduct: function () {
            $.filtrify('product-category', 'placeHolder');
            setTimeout(function() {
                var filterPanel = $('#placeHolder'),
                    ftMenu = $('.ft-menu'),
                    ftLabel= $('.ft-label', ftMenu),
                    ftPanel = $('.ft-panel', ftMenu),
                    sortingBtn = $('.woocommerce-ordering .dropdown-toggle');
                if(ftMenu.length) {
                    if($(window).width() > $laptop - 1) {
                        filterPanel.removeAttr('style');
                        ftLabel.on('click', function() {
                            ftLabel.removeClass('ft-opened');
                            ftPanel.addClass('ft-hidden');
                            $(this).addClass('ft-opened');
                            $(this).parents('.ft-field').find('.ft-panel').removeClass('ft-hidden');
                            sortingBtn.parents('.bootstrap-select').removeClass('open');
                        });
                    }
                    else {
                        var closeBtn = $('.btn-close'),
                            filterBtn = $('.btn-filter');
                        filterBtn.off('click').on('click', function() {
                            closeBtn.fadeIn(300);
                            filterPanel.fadeIn(300);
                            $('body').css('overflow-y', 'hidden');
                        });
                        closeBtn.off('click').on('click', function() {
                            $(this).fadeOut(300);
                            filterPanel.fadeOut(300);
                            $('body').css('overflow-y', 'auto');
                        });
                        ftLabel.off('click').on('click', function() {
                            if($(this).hasClass('ft-clicked')) {
                                $(this).removeClass('ft-clicked');
                            }
                            else {
                                $(this).addClass('ft-clicked');
                            }
                            $(this).parent().siblings().find('.ft-clicked').removeClass('ft-clicked');
                            $(this).parent().siblings().find('.ft-panel').slideUp(300);
                            $(this).parent().find('.ft-panel').slideUp(300);
                            if(!$(this).next('.ft-panel').is(':visible')) {
                                $(this).next('.ft-panel').slideDown(300);
                            }
                        });
                    }
                }
                if(sortingBtn.length) {
                    sortingBtn.on('click', function() {
                        ftLabel.removeClass('ft-opened');
                        ftPanel.addClass('ft-hidden');
                    });
                }
            }, 100);
        },
        
        showAllProducts: function () {
            $('.show-products').click(function(e) {
                $('.product').removeClass('hide');
                $(this).hide();
            })
        },

        relateProductSlider: function() {
            var relateProduct = $('.related .products');
            if(relateProduct.length) {
                relateProduct.slick({
                    slide: 'li',
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: false,
                    responsive: [
                        {
                            breakpoint: $desktop - 1,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: $tablet - 1,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            };
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
        customJS.moreImageProduct();

        // Filter product
        customJS.filterProduct();

        // Show all products
        customJS.showAllProducts();
    });

    /* Window load function */
    $(window).load(function () {
        // Accordion menu
        customJS.accordionMenu();

        // Back top button
        customJS.backTop();

        // Search toggle
        customJS.searchToggle();

        // Relate product slider
        customJS.relateProductSlider();
    });

    /* Window resize function */
    $(window).resize(function () {
        // Close sidebar
        customJS.closeSidebar();

        // Search toggle
        customJS.searchToggle();

        // Filter product
        customJS.filterProduct();
    });
})(jQuery);