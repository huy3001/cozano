/* Custom js */
(function($) {
    // Global variables
    var $desktop = 1200,
        $laptop = 992,
        $tablet = 768,
        $mobile = 480;

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
                searchItem = $('.search-form .search-item'),
                searchTarget = $('.search-form .toggle-search, .search-form .search-item');
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
                    if (!$(target).is(searchTarget) && !$(target).parents().is(searchTarget)) {
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

        productMatchHeight: function() {
            var productItem = $('.tax-product_cat #product-category li.product');
            if($(window).width() > $tablet - 1) {
                productItem.matchHeight();
            }
            else {
                productItem.removeAttr('style');
            }
        },

        filterBarFixed: function() {
            var filterBar = $('.filter-bar');
            if(filterBar.length) {
                filterBar.sticky({
                    topSpacing: 54,
                    zIndex: 111
                });
            }
        },

        filterProduct: function () {
            var resetFilter = $('div.reset-filter');
            var brand = [];
            var style = [];
            var size = [];
            var material = [];
            var color = [];
            var price = [];
            $("#legend p").each(function(){
                if($(this).attr('data-title') == 'nhãn hiệu'){
                    brand.push($(this).text());
                }
                if($(this).attr('data-title') == 'kiểu dáng'){
                    style.push($(this).text());
                }
                if($(this).attr('data-title') == 'chất liệu'){
                    material.push($(this).text());
                }
                if($(this).attr('data-title') == 'màu sắc'){
                    color.push($(this).text());
                }
                if($(this).attr('data-title') == 'size'){
                    size.push($(this).text());
                }
                if($(this).attr('data-title') == 'giá'){
                    price.push($(this).text());
                }
            })
            var ft = $.filtrify('product-category', 'placeHolder', {
                close : true,
                query : {
                    "nhãn hiệu" : brand,
                    "kiểu dáng" : style,
                    "chất liệu" : material,
                    "màu sắc" : color,
                    "size" : size,
                    "giá" : price
                },
                callback : function( query, match, mismatch ) {
                    if ( mismatch.length ) {
                        resetFilter.show();
                        var category, tags, i, tag, legend = "";
                        for (category in query) {
                            tags = query[category];
                            if (tags.length) {
                                for (i = 0; i < tags.length; i++) {
                                    tag = tags[i];
                                    legend += "<p data-title='"+category +"'>" + tag + "</p>";
                                }
                            }
                        }
                        legend = legend.substring(0,legend.length -1);
                        $("#legend").html(legend);
                    }
                    else{
                        $("#legend").html("");
                        resetFilter.hide();
                    }
                }
            });

            resetFilter.on('click', function() {
                ft.reset();
            });
            
            setTimeout(function() {
                var filterPanel = $('#placeHolder'),
                    ftMenu = $('.ft-menu'),
                    ftLabel= $('.ft-label', ftMenu),
                    ftPanel = $('.ft-panel', ftMenu),
                    ftTags = $('.ft-tags', ftPanel),
                    ftTarget = $('.ft-label, .ft-panel', ftMenu),
                    sortingBtn = $('.woocommerce-ordering .dropdown-toggle');
                if(ftMenu.length) {
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
                        sortingBtn.parents('.bootstrap-select').removeClass('open');
                    });

                    ftTags.each(function() {
                        if($(this).find('li').length > 10) {
                            $(this).addClass('ft-columns');
                        }
                    });
                }

                if(sortingBtn.length) {
                    sortingBtn.on('click', function() {
                        ftLabel.removeClass('ft-clicked');
                        ftPanel.slideUp(300);
                    });
                }

                if($(window).width() > $laptop - 1) {
                    filterPanel.removeAttr('style');
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
                        resetFilter.hide();
                        $('body').removeAttr('style');
                    });
                }

                $(document).on('click', function(e) {
                    var target = e.target;
                    if (!$(target).is(ftTarget) && !$(target).parents().is(ftTarget)) {
                        ftLabel.removeClass('ft-clicked');
                        ftPanel.slideUp(300);
                    }
                });
            }, 100);
        },
        
        showAllProducts: function () {
            $('.show-products').click(function(e) {
                $('.product').removeClass('hide');
                $(this).hide();
            })
        },

        relateProductSlider: function() {
            var relateProduct = $('.single-product ul.products');
            if(relateProduct.length) {
                relateProduct.slick({
                    slide: 'li',
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: false,
                    responsive: [
                        {
                            breakpoint: $laptop,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: $mobile + 1,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        },

        productDetailSlider: function() {
            var imageList = $('.image-list'),
                thumbList = $('.thumb-list'),
                thumbCount = $('li', thumbList).length;
            if(imageList.length) {
                imageList.slick({
                    arrows: false,
                    asNavFor: '.thumb-list',
                    fade: false,
                    slide: 'li',
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipe: false,
                    responsive: [
                        {
                            breakpoint: $desktop,
                            settings: {
                                arrows: true,
                                swipe: true
                            }
                        },
                        {
                            breakpoint: $tablet,
                            settings: {
                                arrows: true,
                                asNavFor: '',
                                dots: true,
                                swipe: true
                            }
                        }
                    ]
                });
                thumbList.slick({
                    arrows: false,
                    asNavFor: '.image-list',
                    focusOnSelect: true,
                    slide: 'li',
                    slidesToShow: thumbCount,
                    slidesToScroll: 0,
                    swipe: false,
                    vertical: true
                });
            }

            $('li a', thumbList).on('click', function(e) {
                e.preventDefault();
            });

            $('li a', imageList).on('click', function(e) {
                e.preventDefault();
            });

            $('li a', imageList).elevateZoom({
                zoomType: 'inner',
                cursor: 'crosshair'
            });
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

        // Filter bar fixed
        customJS.filterBarFixed();

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

        // Product match height
        customJS.productMatchHeight();

        // Relate product slider
        customJS.relateProductSlider();

        // Product detail slider
        customJS.productDetailSlider();
    });

    /* Window resize function */
    $(window).resize(function () {
        // Close sidebar
        customJS.closeSidebar();

        // Search toggle
        customJS.searchToggle();

        // Product match height
        customJS.productMatchHeight();

        // Filter product
        customJS.filterProduct();
    });
})(jQuery);