$(document).ready(function() {

    // scroll top	
    var scrollTopEle = function(query, val) {
        val == undefined || null ? 0 : val;
        //newinvest-plans-none;
        var target = query;
        if (target.length >= 1) {
            $('html, body').animate({
                scrollTop: target.offset().top - val
            }, 500);
        }
    }

    // header-top expansion for Web
    $('.header-top-expand-arrow').on('click', function() {
        $('.top-news-snap').toggle();
        $('.normal-disaply').toggleClass('expansion-hide-data');
        $('.after-expand').slideToggle();
        $('.open-arrow').toggleClass('active');
        $('.header-second-web').toggleClass('header-second-web-top-expansion');
        $('.breadcrumb-sec').toggleClass('breadcrumb-sec-after-expansion');
        $('.site-start').toggleClass('site-start-after-expansion');
        $('.site-start-modules').toggleClass('site-start-modules-after-expansion');
    });

    // header-top expansion for mobile
    var scr_width = $(document).width();
    if (scr_width < 995) {
        $('.header-top-expand-arrow').on('click', function() {
            $('.overlay').toggle();
            $('.header-top-after-expand').toggle();
            $('.normal-disaply').toggleClass('expansion-hide-data');
            $('.top-news-snap,.expansion-divider').toggle();
            $('.mob-header-top-icon').toggleClass('active');
            $('body').toggleClass('header-top-overflow');
        });
    }

    //support-menu	
    $('.drop-click').on('click', function() {
        var $div = $(this).next();
        $('.support-menu').not($div).hide();
        $div.toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.support').length
        if (!p) {
            $('.support-menu').hide();
            $('.drop-click').removeClass('active');
        }
    });

    //country select header top	
    $('.hea-top-drop li a').on('click', function() {
        $('.select-val').html($(this).text());
        $('.hea-top-drop').hide();
        $('.drop-click').removeClass('active');
    });
    $('.country-drop').on('click', function() {
        $('.header-top-country').toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.country-drop').length
        if (!p) {
            $('.header-top-country').hide();
        }
    });
    $('.header-top-country li a').on('click', function() {
        $('.coun-select-val').html($(this).text());
        $('.header-top-country').hide();
    });

    // Navigation for resize call function
    navigation();


    //	vector menu
    $('.responsive-menu').on('click', function() {
        $('body').toggleClass("off");
        $('.menu-section').show();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.menu-section,.header-second-mobile').length
        if (!p) {
            $('body').removeClass("off");
        }
    });

    //Responsive more-menu	
    $(".res-moremenu").on('click', function() {
        $('.header-menu').toggle();
    });

    var reswid = $(document).width();

    if (reswid <= 995) {
        $(document).click(function(e) {
            var p = $(e.target).closest('.res-moremenu').length
            if (!p) {
                $('.header-menu').hide();
            }
        });
    }

    $(document).resize(function() {
        if (reswid <= 995) {
            $(document).click(function(e) {
                var p = $(e.target).closest('.res-moremenu').length
                if (!p) {
                    $('.header-menu').hide();
                }
            });
        }
    });


    // Move top arrow
    $(window).scroll(function() {
        if ($(this).scrollTop() < 100) {
            $('#totop').fadeOut();
            $('.header-second-web,.breadcrumb-sec').show();
            $('.site-start-modules,.site-start').removeClass('site-start-modules-hide');
        } else {
            $('#totop').fadeIn();
            $('.header-second-web,.breadcrumb-sec').hide();
            $('.site-start-modules,.site-start').addClass('site-start-modules-hide');
        }
    });

    $('#totop').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 'fast');
        return false;
    });

    /* :::::::::::::::::::::::::::::::::: Share like :::::::::::::::::::::::::::::::::::::::*/

    $('.like-box-btn').on('click', function() {
        $(this).find('.like-small').addClass('active');
        $('.like-box').show().delay(2000).fadeOut(800);
    });
    $('.like-box-btn1').on('click', function() {
        $(this).find('.share-1').addClass('active');
        $('.like-box').show().delay(2000).fadeOut(800);
    });


    /* :::::::::::::::::::::::::::::::::: Kyc :::::::::::::::::::::::::::::::::::::::*/

    // Wizard
    $('.pcacs-tabs').on('click', function() {
        var pastep = "." + $(this).attr('id')
        $(this).parents('.pacs').hide();
        $(pastep).show();
    });
    $('.already-user').on('click', function() {
        $('.create-user-block').hide();
        $('.already-user-block').show();
    });
    $('.create-user').on('click', function() {
        $('.already-user-block').hide();
        $('.create-user-block').show();
    });
    $('.no-modify').on('click', function() {
        $('.sucess-msg-wiz').hide();
        $('.account-step-1-block').show();
    });
    $('.account-step-1').on('click', function() {
        $('.account-step-1-block').hide();
        $('.account-step-2-block').show();
    });

    // Forget password
    $('#forget-id').change(function() {
        $('.resetpwd').hide();
        $('#' + $(this).val()).show();
    });

    //	Debit card card
    $('.debit-card').on('keyup', function() {
        if (this.value.length == this.maxLength) {
            $(this).next('.debit-card').focus();
        }
    });

    // Forget password-confirm
    $('.forget-email1').on('click', function() {
        $('.forget-email-block1').hide();
        $('.forget-email-block2').show();
    });

    // unfreeze account
    $(".unfreeze input[type='radio']").click(function() {
        if ($(this).val() == "pan") {
            $('.pan').show();
            $('.username').hide();
        } else {
            $('.username').show();
            $('.pan').hide();
        }
    });

    // Alert message
    $('.sucess-alert-btn').on('click', function() {
        var $div2 = $('.def-msg-none');
        $('.def-msg').hide();
        if ($div2.is(':visible')) {
            return;
        }
        $div2.show();
        setTimeout(function() {
            $div2.hide();
        }, 2000);
    });

    /* :::::::::::::::::::::::::::::::::: Research :::::::::::::::::::::::::::::::::::::::*/

    // reasearch time and term 
    $('.invest-down').on('click', function() {
        var $div = $(this).next();
        $('.rea-mod-time').not($div).hide();
        $div.toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.invest-drop').length
        if (!p) {
            $('.rea-mod-time').hide();
        }
    });

    // reasearch time and term
    $('.time-drop li a').on('click', function() {
        $('.invest-item-time').html($(this).closest('li').find('.invest-time').text());
        $('.rea-mod-time').hide();
    });

    //tabs -Content Change --markets
    $('.mar-time-drop li a').on('click', function() {
        var time_drop_text = $(this).text();
        $(this).parents('.invest-drop-txt').find('.invest-down .invest-item-time').text(time_drop_text);
        $('.rea-mod-time').hide();
    });

    // reasearch time and term


    function terms() {
        var allVals = [];
        var res_time = $('input[name="term"]:checked').each(function() {
            allVals.push($(this).val());
        });
        $('.invest-items-term').text(allVals) + "";
    }
    $(".name-drop input[type='checkbox']").click(function() {
        terms();
    });
    $('.invest-drop-close').on('click', function() {
        $('.rea-mod-time').hide();
    });

    // sort --> reasearch
    $('.sort-name').on('click', function() {
        $(this).closest('.sort-by').find('.sort-list').toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.sort-name').length
        if (!p) {
            $('.sort-list').hide();
        }
    });
    $('.sort-list li a').on('click', function() {
        $(this).closest('.sort-slide-num').find('.sort-select-name').html($(this).text());
        $('.sort-list').addClass(a);
    });
    $('.add-wish-sel').on('click', function() {
        $(this).closest('.msg-select').find('.sort-list').toggle();
    });
    $('.sel-compare-li li a').on('click', function() {
        $('.sel-compare').html($(this).text());
        alert(i);
        $('.sort-list').hide();
        $('.sort-by').removeClass('active');
    });

    //wish list over page
    $('.wish-compare').on('click', function() {
        if (!$(this).is(':checked')) {
            $(this).closest('.stock-sec').find('.sel-msg-fly').show();
            $(this).parents('.stock-sec').find('.wishlist').addClass('wishwork');
        }
    });
    $('.cart-list').on('click', '.wishwork', function() {
        $(this).closest('.stock-sec').find('.sel-msg-fly').hide();
        $(this).closest('.stock-sec').find('.schesme-wish').show();
    });
    $('.add-wish').on('click', function() {
        $(this).closest('.stock-sec').find('.schesme-wish').hide();
        $(this).closest('.stock-sec').find('.wish-suces').show().delay(3000).fadeOut(800);
    });
    $('.cancel-wish').on('click', function() {
        $(this).closest('.stock-sec').find('.schesme-wish').hide();
    });

    //wish list inside page
    $('.panel-heading').on('click', function() {
        if ($(this).closest('.panel-heading').find('.panel-compare-action input[type="checkbox"]').is(':checked')) {
            $('.sel-msg-fly-in').show();
            $(this).parentsUntil('stock-details').find('.wishlist-in').addClass('wishwork');
        } else {
            $('.sel-msg-fly-in').hide();
        }
    });
    $('.wishlist').on('click', function() {
        $('.select-basic-compare').show().delay(2000).fadeOut(800);
    });

    $('.cart-list').on('click', '.wishwork', function() {
        $('.sel-msg-fly-in').hide();
        $('.schesme-wish-in').show();
    });
    $('.add-wish').on('click', function() {
        $('.schesme-wish-in').hide();
        $('.wish-suces-in').show().delay(2000).fadeOut(800);
    });
    $('.cancel-wish-in').on('click', function() {
        $('.schesme-wish-in').hide();
    });

    // filter boxes close
    $('.filter-ele-close').on('click', function() {
        $(this).closest('.filter-box-name').hide();
    });
    $(".acc-fill").click(function() {
        $(this).next(".fill-call-data").slideToggle("").siblings(".fill-call-data:visible").slideUp("");
        $(this).toggleClass("current");
        $(this).siblings(".acc-fill").removeClass("current");
    });

    // filter boxes check for radio
    $('.filter-check ').click(function() {
        if ($(this).closest('.serach-box-fly').find('.filter-check input[type="checkbox"]').is(':checked')) {
            $(this).closest('.serach-box-fly').find('.fillcheck').prop("checked", false);
        } else {
            $(this).closest('.serach-box-fly').find('.fillcheck').prop("checked", true);
        }
    });

    // Grid view list view display
    $('.list-ico').on('click', function() {
        $('.grid-ico').removeClass('active');
        $('.grid-icon').removeClass('active');
        $('.list-ico').addClass('active');
        $('.list-icon').addClass('active');
        $('.grid-box').addClass('list-box');
    });
    $('.grid-ico').on('click', function() {
        $('.list-ico').removeClass('active');
        $('.list-icon').removeClass('active');
        $('.grid-ico').addClass('active');
        $('.grid-icon').addClass('active');
        $('.grid-box').removeClass('list-box');
    });

    //cart more-menu	
    $(".cartmore").on('click', function() {
        $(this).closest('.cart-more-menu').find('.cart-more-items').toggle();
    });
    $(document).click(function(e) {
        var p = $(e.target).closest('.cart-more-menu').length
        if (!p) {
            $(".cart-more-items").hide();
        }
    });
    $(".cart-more-items li a").on('click', function() {
        $(".cart-more-items").hide();
    });

    //Filter
    $('.fill-box,.fil-fly-btns').on('click', function() {
        $('.filter-content-box').slideToggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.fill-box,.filter-content-box').length
        if (!p) {
            $('.filter-content-box').slideUp();
        }
    });

    // Reports showall
    $('.report-showall').on('click', function() {
        var $div = $(this).next();
        $('.report-name-fly').not($div).hide();
        $div.toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.report-showall').length
        if (!p) {
            $('.report-name-fly').hide();
        }
    });
    $('.desc-content').on('click', function() {
        var $div = $(this).next();
        $('.report-content').not($div).hide();
        $div.toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.desc-content').length
        if (!p) {
            $('.report-content').hide();
        }
    });

    //Equity Investment Ideas
    $('.jqpop').on('click', '.graph-dis', function() {
        $('.graph-deisgn,.ratle-btns').hide();
        $('.graph-content,.grph-btns').show();
    });
    $('.jqpop').on('click', '.content-dis', function() {
        $('.graph-content,.grph-btns').hide();
        $('.graph-deisgn,.ratle-btns').show();
    });

    //Coatch Screen Overlay
    setTimeout(function() {
        $('.invest-drop').removeClass('coath-text');
        $('.coatch-overlay').fadeOut(300);
        if ($('.coatch-overlay').css("display", "none")) {
            $('.overlayhide').addClass("open");
        } else {
            $('.overlayhide').removeClass("open");
        }
    }, 5000);
    $(document).click(function() {
        $('.invest-drop').removeClass('coath-text');
        $('.coatch-overlay').fadeOut(300);
        //$('body').css("overflow", "auto");
    });

    /* :::::::::::::::::::::::::::::::::: Markets :::::::::::::::::::::::::::::::::::::::*/

    // markest stockbuz vals chnage like tabs 
    $(document).on('click', function(e) {
        var hitTar = $(e.target);
        if (hitTar.hasClass('market_val_item')) {
            var hitTarVal = hitTar.attr('data-val');
            hitTar.addClass('active').parent().siblings().find('a').removeClass('active');
            hitTar.closest('ul.market-vals').next('.dval-dis').text(hitTarVal);
        }
    });

    // Sort menu
    $('.sort-select-name-click').on('click', function() {
        $(this).closest('.stockhead').find('.market-subnames').toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.sort-select-name-click').length
        if (!p) {
            $('.market-subnames').hide();
        }
    });
    $('.market-subnames li a').on('click', function() {
        $(this).closest('.stockhead').find('.sort-select-name').html($(this).text());
        $('.market-subnames').hide();
    });

    // Grid view list view display
    $('.mar-grid-btn').on('click', function() {
        $(this).closest('.gri-li-sta').find('.mar-list-con').hide();
        $(this).closest('.gri-li-sta').find('.mar-scattered-con').hide();
        $(this).closest('.gri-li-sta').find('.mar-grid-con').show();
    });
    $('.mar-list-btn').on('click', function() {
        $(this).closest('.gri-li-sta').find('.mar-grid-con').hide();
        $(this).closest('.gri-li-sta').find('.mar-scattered-con').hide();
        $(this).closest('.gri-li-sta').find('.mar-list-con').show();
    });
    $('.mar-sctared-btn').on('click', function() {
        $(this).closest('.gri-li-sta').find('.mar-grid-con').hide();
        $(this).closest('.gri-li-sta').find('.mar-list-con').hide();
        $(this).closest('.gri-li-sta').find('.mar-scattered-con').show();
    });

    //Shareholding View Details
    $(".sharehold-viewdetails").on('click', function() {
        var $el = $(this);
        $el.text($el.text() == "View More" ? "View Less" : "View More");
        $('.trdisplay').toggle();
    });
    $(".company-trading-show").on('click', function() {
        $(this).closest('.data-section').find('.trading-show-btn').hide();
        $(this).closest('.data-section').find('.comny-trade-hide').show();
    });

    //statisticelist
    $('.statistics-list-view').on('click', function() {
        var $el = $(this);
        $el.text($el.text() == "View Funds" ? "Hide Funds" : "View Funds");
        $(this).closest('.mutual-statistics-con').find('.mutual-statistics-list').toggle();
    });

    // gotocontract and stock buzz
    $('.contarct-buzz').on('click', function() {
        $('.stock-buzz-con').hide();
        $('.contarct-buzz-con').show();
    });
    $('.stock-buzz').on('click', function() {
        $('.contarct-buzz-con').hide();
        $('.stock-buzz-con').show();
    });

    //tabs -Content Change
    $('.tab-slide1 li a').on('click', function() {
        $('.tab-slide1 li a').removeClass('active-tab');
        $('.tab-slider-content').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    $('.tab-slide2 li a').on('click', function() {
        $('.tab-slide2 li a').removeClass('active-tab');
        $('.tab-slider-content2').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    $('.tab-slide3 li a').on('click', function() {
        $('.tab-slide3 li a').removeClass('active-tab');
        $('.tab-slider-content3').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    $('.tab-slide4 li a').on('click', function() {
        $('.tab-slide4 li a').removeClass('active-tab');
        $('.tab-slider-content4').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    $('.tab-slide5 li a').on('click', function() {
        $('.tab-slide5 li a').removeClass('active-tab');
        $('.tab-slider-content5').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    $('.tab-slide6 li a').on('click', function() {
        $('.tab-slide6 li a').removeClass('active-tab');
        $('.tab-slider-content6').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    $('.tab-slide7 li a').on('click', function() {
        $('.tab-slide7 li a').removeClass('active-tab');
        $('.tab-slider-content7').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    $('.tab-slide8 li a').on('click', function() {
        $('.tab-slide8 li a').removeClass('active-tab');
        $('.tab-slider-content8').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });

    /* :::::::::::::::::::::::::::::::::: offerings :::::::::::::::::::::::::::::::::::::::*/

    //planssection 
    $('.showme-plans').on('click', function() {
        $(this).closest('.pricing-btnsec').find('.showme-plans,.price-trade-link').hide();
        $(this).closest('.pricing-btnsec').find('.modifyplans').show();
        $(this).closest('.pricing-btnsec').find('.plans-invest').show();


        scrollTopEle($(this).closest('.pricing-btnsec').find('.plans-invest'), 100);
    });

    // expansion
    $('.pro-exp-btn').on('click', function(e) {
        e.preventDefault();
        var target = $(this).closest('.pro-over').find('.expansion-pro').slideToggle(800);
        $(this).closest('.pro-over').find('.expansion-pro1').hide();

        console.log(target);

        scrollTopEle(target, 250);
    });
    $('.pro1-exp-btn').on('click', function(e) {
        e.preventDefault();
        var target = $(this).closest('.pro-over').find('.expansion-pro1').slideToggle(800);
        $(this).closest('.pro-over').find('.expansion-pro').hide();
        /* scrolled = $(document).scrollTop();
                scrolled = scrolled + 500;
                $('html , body').animate({
                    scrollTop: scrolled
                })*/
        scrollTopEle(target, 250);
    });

    $('.close-expansion').on('click', function() {
        $(this).closest('.pro-over').find('.expansion-pro,.expansion-pro1').slideUp(800);
    });

    /* pricing respecive div show*/
    $('.price-item-selctor li a').on('click', function() {
        var div_name = $(this).attr('data-val');
        $('.pricing-btnsec').hide();
        $('#' + div_name).show();
        $('#' + div_name).find('.without-slider-price ul').show();
        $('#' + div_name).find('.slide-price-none').hide();
        $('#' + div_name).find('.newinvest-plans-none').hide();
        $('#' + div_name).find('.newinvest-plans-block').show();

        $.each($('.price-carosal'), function(i, n) {
            slider = $(n).bxSlider();
            slider.reloadSlider()
            slider.destroySlider();
        });
    });
    $('.price-trade-link').on('click', function() {
        $('.invest-1').hide();
        $('.invest-2').show();
    });

    // :::::::::::::::::::::::::::::::::: Plugins :::::::::::::::::::::::::::::::::::::::
    //News-ticker	
    var nt_example1 = $('.sensex-list').newsTicker({
        row_height: 31,
        max_rows: 5,
        duration: 4000,
    });


    // Tabs
    $('.tabs').tabs();

    // Tabs
    $(".tabs-secmenu").tabs({
        active: 1
    });

    // Tabslider
    tabslider();

    //Custom Select
    $('.select').select2({
        minimumResultsForSearch: -1,
    });

    //Table accordian
    $(".acordian-click").accordion({
        heightStyle: "content"
    });

    //menu filter
    $('.menu-filter').accordion();

    //Auto Complete -->Markets
    $(function() {
        var availableTags = ["RELIND - Reliance Industries Ltd", "RELINF - Reliance Infrastructure Ltd", "RELIDF - Reliance Industrial Infrastructure Ltd", "Reliance Industries Ltd - RELIANCE", "Reliance Communications Ltd - RCOM", "Reliance Power Ltd - RPOWER", "Reliance Infrastructure Ltd - RELINFRA", "Reliance Capital Ltd - RELCAPITAL", "Religare Enterprises Ltd - RELIGARE ", "Reliance Industrial Infrastructure Ltd - RIIL ", "Reliance Chemotex Industries Ltd - NA"];
        $(".auto-complete").autocomplete({
            source: availableTags,
            open: function(event, ui) {
                $(this).autocomplete("widget").css({
                    "width": 511
                });
            }
        });
    });

    $(function() {
        var availableTags = ["Equity", "Derivatives", "Mutual", "Reliance", "Communications Lt", "RPOWER", "RELINFRA", "RELCAPITAL", "RELIGARE ", "RIIL ", "NA"];
        $(".global-search").autocomplete({
            source: availableTags,
            open: function(event, ui) {
                $(this).autocomplete("widget").css({
                    "width": 230
                });
            }
        });
    });


    //BX Slider for card view --> insights

    if ($(window).width() <= 995) {
        $('.ca-slider').bxSlider({
            minSlides: 1,
            maxSlides: 1,
        });
    } else {
        $('.ca-slider').bxSlider({
            minSlides: 1,
            maxSlides: 3,
            slideWidth: 308,
            slideMargin: 20
        });
    }


    //BX Slider  --> news markets
    $('.snap-news-slider').bxSlider({
        auto: true,
    });

    //Bxslider for Option Chain --> Derivatives
    $('.option-chain-slider').bxSlider({
        mode: 'vertical',
        infiniteLoop: true,
        pager: false,
        controls: true,
        minSlides: 3,
        maxSlides: 4,
        moveSlides: 1,
    });

    //Date Picker
    $('.datepicker').datepicker({
        showOn: "both",
        buttonImage: '../images/calender-icon.png',
        buttonImageOnly: true,
    });

    //Markets slider tab
    $('.curosal').bxSlider({
        slideWidth: 244,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 1,
        infiniteLoop: false
    });

    //price slider --> Offerinigs
    var price_slider_setting = {
        moveSlides: 1,
        infiniteLoop: false,
    };

    var price_slider;

    var price_list_slider_width = $('.price-list-slider').width();

    // priceing newto investing
    $('.newinvest-plans-block').on('click', function() {
        $(this).closest('.price-list-slider').find('.dis-price-slider,.newinvest-plans-block').hide();
        $(this).closest('.price-list-slider').find('.slide-price-none,.newinvest-plans-none').show();


        price_slider = $(this).closest('.price-downpart').prev().find('.price-carosal').bxSlider({
            slideWidth: $(document).width() > 995 ? 225 : price_list_slider_width,
            minSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true,
            minSlides: 1,
            maxSlides: 4,
            moveSlides: 1,
        });
        // for focused scrolling
        scrollTopEle($(this).closest('.plans-invest'), 0);
    });
    $('.newinvest-plans-none').on('click', function() {
        $(this).closest('.price-list-slider').find('.slide-price-none,.newinvest-plans-none').hide();
        $(this).closest('.price-list-slider').find('.dis-price-slider,.newinvest-plans-block').show();
        price_slider.destroySlider();
        scrollTopEle($(this).closest('.plans-invest'), 0);
    });

    $(window).resize(function() {
        if ($(window).width() <= 995) {
            if (price_slider != undefined) {
                price_slider_setting.slideWidth = price_list_slider_width;
                price_slider_setting.minSlides = 1;
                price_slider_setting.maxSlides = 1;
                price_slider.reloadSlider(price_slider_setting);
            }
        } else {
            if (price_slider != undefined) {
                price_slider_setting.slideWidth = 225;
                price_slider_setting.minSlides = 4;
                price_slider_setting.maxSlides = 4;
                price_slider.reloadSlider(price_slider_setting);
            }
        }
    });




    //View Plan Details
    $('.pop-pack').on('click', '.showdetails', function() {
        $('.plandetails-show').show();
        $('.showdetails').hide();
    });

    //Dialog Box
    $(".premiumresearchdialog,.pop-pack,.pop-price,.addtopopup,.pop-share-details").dialog({
        autoOpen: false,
        draggable: false,
        resizable: false,
        modal: true,
        autoReposition: true,
        width: 450,
    });

    $(window).resize(function() {
        $(".premiumresearchdialog,.pop-pack,.pop-price,.addtopopup,.share-details").dialog("option", "position", "center");
    });

    $(".pop-pack").dialog({
        width: 980,
    });


    /*//View Details for ajax calls 
        $(".checkpremium,.pop-like,.report-ful-desc").on("click", function() {
            $('body').toggleClass('popup-overflow');

            var pagename = $(this).attr('title');
            $(".pop-pack").dialog("open").load(pagename + ".html");

        });
    	
    	//View Details for ajax calls->pricing offerings
    	 $(".pop-price-btn").on("click", function() {
            $('body').toggleClass('popup-overflow');
            var pagename = $(this).attr('data-val');
            $(".pop-price").dialog("open").load(pagename + ".html");

        });
    	
    	//View Details for ajax calls->share
    	 $(".share-details").on("click", function() {
            $('body').toggleClass('popup-overflow');
            var pagename = $(this).attr('data-val');
            $(".pop-share-details").dialog("open").load(pagename + ".html");

        });
    	*/
    //Close Dialog Popup
    $('body').on('click', '.dialog-close', function(e) {
        e.preventDefault();
        $('body').removeClass('popup-overflow');
        $(".pop-pack,.pop-share-details").dialog("close");
        return false;
    });

    // data-url="index.php?option=com_users&view=reset&layout=share_social&tmpl=component" title="share"
    var popUrl = "index.php?option=com_users&view=reset&tmpl=component";

    //View Details for ajax calls 
    $('.pop-like, .apply-car').on('click', function(e) {
        $('body').toggleClass('popup-overflow');
        if ($(this).attr('title') == undefined) {
            var pagename = $(this).attr('data-val');
        } else {
            var pagename = $(this).attr('title');
        }
        var loadPopup = popUrl + "&layout=" + pagename;
        var localPop = pagename + '.html';
        $('.pop-pack').dialog({
            width: $(this).attr('data-size') == undefined ? 980 : $(this).attr('data-size')
        });
        $(".pop-pack").dialog("open").load(localPop, function(content, status, xhr) {
            // console.log(content, status, xhr);
            if (status == 'success') {
                $(".pop-pack").dialog({
                    position: {
                        my: "center",
                        at: "center",
                        of: window,
                        collision: 'fit'
                    }
                });
                $(document).find('head').append('<script src="js/rate-it.js"></script>');
            }
        });
    });

    // social more button
    $('body').on("click", ".more-btn", function() {
        $(".more-btn").hide();
        $('.soc-icon-hide').css('display', 'inline-block');
    });

    // feedback button
    $('body').on("click", ".rate-it", function() {
        $(".rating-div").hide();
        $('.thank').show();
    });

    // fullpage -- >offerings
    $('.fullpage').fullpage({
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        'navigation': true,
        'navigationPosition': 'right',
    });
    $(document).resize(function(e){
        // e.preventDefault();
        if($(window).width() > 995){
            console.log("above 995");
            $('.fullpage').fullpage.reBuild('all');            
        }else{
            console.log("below");
            $('.fullpage').fullpage.destroy('all');            
        }
    });


    //Rate me -->social 
    $(".rateit").bind('over', function(event, value) {
        $(this).attr('title', tooltipvalues[value - 1]);
    });

    // timer -- markets
    $('.defaultCountdown').countdown({
        until: new Date(2015, 10 - 1, 30)
    });

    //animation -- > offerings
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 180,
        mobile: true,
        live: true
    });
    wow.init();

    // prcing slider for -- >offerings
    $(".slider-range-min1").slider({
        range: "min",
        value: 50000,
        min: 1,
        max: 100000,
        slide: function(event, ui) {
            $(".amount1").val("Rs " + ui.value);
            $(".amt-val").text("Rs " + ui.value);
        }
    });

    $(".amt-val").text("Rs " + $(".slider-range-min1").slider("value"));

    $(".slider-range-min2").slider({
        range: "min",
        value: 3000,
        min: 1,
        max: 50000,
        slide: function(event, ui) {
            $(".amount2").val("Rs " + ui.value);
            $(".amt-val2").text("Rs " + ui.value);
        }
    });
    $(".amt-val2").text("Rs " + $(".slider-range-min1").slider("value"));

    $(".slider-range-min3").slider({
        range: "min",
        value: 40000,
        min: 1,
        max: 100000,
        slide: function(event, ui) {
            $(".amount3").val("Rs " + ui.value);
            $(".amt-val3").text("Rs " + ui.value);
        }
    });
    $(".amt-val3").text("Rs " + $(".slider-range-min1").slider("value"));

    $(".slider-range-min4").slider({
        range: "min",
        value: 50000,
        min: 1,
        max: 100000,
        slide: function(event, ui) {
            $(".amount4").val("Rs " + ui.value);
            $(".amt-val4").text("Rs " + ui.value);
        }
    });
    $(".amt-val4").text("Rs " + $(".slider-range-min1").slider("value"));

    $(".slider-range-min5").slider({
        range: "min",
        value: 60000,
        min: 1,
        max: 100000,
        slide: function(event, ui) {
            $(".amount5").val("Rs " + ui.value);
            $(".amt-val5").text("Rs " + ui.value);
        }
    });
    $(".amt-val5").text("Rs " + $(".slider-range-min1").slider("value"));

    // priceing progress bar -- >offerings
    var progressbar = $(".progressbar"),
        progressLabel = $(".progress-label");

    progressbar.progressbar({
        value: false,
        change: function() {
            progressLabel.text(progressbar.progressbar("value") + "%");
        },
        complete: function() {
            progressLabel.text("Complete!");
        }
    });

    function progress() {
        var val = progressbar.progressbar("value") || 0;

        progressbar.progressbar("value", val + 2);

        if (val < 99) {
            setTimeout(progress, 80);
        }
    }

    setTimeout(progress, 2000);




    // Menu Active and scrool 
    if ($(window).width() <= 995) {
        $('.le-products-menu').singlePageNav({
            offset: 86,
            filter: ':not(.external)',
            speed: 750,
            currentClass: 'active',
        });
    } else {
        $('.le-products-menu').singlePageNav({
            offset: 34,
            filter: ':not(.external)',
            speed: 750,
            currentClass: 'active',
        });
    }



    /* resize function */

    $(window).resize(function() {
        // navigation
        navigation();

    });

});

// header-top expansion Menu for web and mobile


function navigation() {
    var scr_width = $(document).width(); /*console.log("Screen ", scr_width);*/
    if (scr_width > 995) {
        $('.first-level-menu > li > a').click(function(event) {
            $('.second-level').not($(this).closest('li').find('.second-level')).hide();
            $(this).closest('li').find('.second-level').slideToggle();
            $(this).closest('li').siblings().removeClass('active');
            $(this).closest('li').toggleClass('active');

            event.stopImmediatePropagation();
        });
        $('.second-level-menu > li').hover(function() {
            $(this).closest('li').siblings().removeClass('active');
            $(this).closest('li').addClass('active');
        });

        $(document).on('click', function(e) {
            var p = $(e.target).closest('.first-level-menu').length
            if (!p) {
                $('.second-level').hide();
                $('.first-level-menu > li').removeClass('active');
            }
        });
    } else {
        $('ul.accordion').accordion({
            collapsible: true,
            active: true,
            heightStyle: "content"
        });
    }
}

/* tab slider */
function tabslider() {
    $(".slide-tab").sliderTabs({
        mousewheel: false,
        position: "top",
        transition: "fade",
        tabSlide: 2,
        tabSlideLength: $(document).width() > 995 ? 196 : 160,
        tabHeight: 100
    })

}

/* fullpage images -- > offerings*/
function cycleImages() {
    var $active = $('.image-platfade ul li.active');
    var $next = ($active.next().length > 0) ? $active.next() : $('.image-platfade li.active');
    $next.css('z-index', 2); //move the next image up the pile
    $active.fadeOut(1500, function() { //fade out the top image
        $active.css('z-index', 1).fadeIn().removeClass('active'); //reset the z-index and unhide the image
        $next.css('z-index', 3).addClass('active'); //make the next image the top one
    });
}

$(document).ready(function() {
    // run every 7s
    setInterval('cycleImages()', 7000);
})