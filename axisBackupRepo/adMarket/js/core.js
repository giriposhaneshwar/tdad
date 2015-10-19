$(document).ready(function() {

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

    // reasearch time and term -- reasearch module
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

    // reasearch time and term -- reasearch module
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
    // reasearch time and term -- reasearch module
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
        $(this).closest('.stock-sec').find('.wish-suces').show().delay(2000).fadeOut(800);
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

    // Grid view list view display -- >Insights
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

    // markets sort menu
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

    // markest stockbuz vals chnage like tabs -- Markets
    $(document).on('click', function(e) {
        var hitTar = $(e.target);
        if (hitTar.hasClass('market_val_item')) {
            var hitTarVal = hitTar.attr('data-val');
            hitTar.addClass('active').parent().siblings().find('a').removeClass('active');
            hitTar.closest('ul.market-vals').next('.dval-dis').text(hitTarVal);
        }
    });


    // Grid view list view display --> markets
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

    //Shareholding View Details --> markets
    $(".sharehold-viewdetails").on('click', function() {
        var $el = $(this);
        $el.text($el.text() == "View More" ? "View Less" : "View More");
        $('.trdisplay').toggle();
    });
    $(".company-trading-show").on('click', function() {
        $(this).closest('.data-section').find('.trading-show-btn').hide();
        $(this).closest('.data-section').find('.comny-trade-hide').show();
    });
	
	//statisticelist --> markets
	
	$('.statistics-list-view').on('click', function() {
		 var $el = $(this);
        $el.text($el.text() == "View Funds" ? "Hide Funds" : "View Funds");
        $(this).closest('.mutual-statistics-con').find('.mutual-statistics-list').toggle();
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



    //Coatch Screen Overlay
    setTimeout(function() {
        $('.invest-drop').removeClass('coath-text');
        $('.coatch-overlay').fadeOut(300);
        if ($('.coatch-overlay').css("display", "none")) {
            $('body').addClass("open");
        } else {
            $('body').removeClass("open");
        }
    }, 5000);
    $(document).click(function() {
        $('.invest-drop').removeClass('coath-text');
        $('.coatch-overlay').fadeOut(300);
        $('body').css("overflow", "inherit");
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
    //Portfolio menu	
    $('.fill-box,.fil-fly-btns').on('click', function() {
        $('.filter-content-box').slideToggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.fill-box,.filter-content-box').length
        if (!p) {
            $('.filter-content-box').slideUp();
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

	//Menu smooth scroll
	$(".smoothscroll").click(function() {
		$("body, html").animate({ 
			scrollTop: $( $(this).attr('href')).offset().top - 507+ "px"
		}, 600);
	});
    //News-ticker	
    var nt_example1 = $('.sensex-list').newsTicker({
        row_height: 31,
        max_rows: 5,
        duration: 4000,
    });

    //View Plan Details
    $('.pop-pack').on('click', '.showdetails', function() {
        $('.plandetails-show').show();
        $('.showdetails').hide();
    });

    // Tabs
    $('.tabs').tabs();
	
	// Tabs
	$(".tabs-secmenu" ).tabs({ active: 1 });
	
	
    // Tabslider
    tabslider();

    //Custom Select
    $('.select').select2({
        minimumResultsForSearch: -1,
    });

    //Table accordian
   $( ".acordian-click" ).accordion({
    	heightStyle: "content"
    });

    //menu filter
    $('.menu-filter').accordion();

    //Auto Complete
    $(function() {
        var availableTags = [
            "RELIND - Reliance Industries Ltd",
            "RELINF - Reliance Infrastructure Ltd",
            "RELIDF - Reliance Industrial Infrastructure Ltd",
            "Reliance Industries Ltd - RELIANCE",
            "Reliance Communications Ltd - RCOM",
            "Reliance Power Ltd - RPOWER",
            "Reliance Infrastructure Ltd - RELINFRA",
            "Reliance Capital Ltd - RELCAPITAL",
            "Religare Enterprises Ltd - RELIGARE ",
            "Reliance Industrial Infrastructure Ltd - RIIL ",
            "Reliance Chemotex Industries Ltd - NA"
        ];
        $(".auto-complete").autocomplete({
            source: availableTags
        });
    });

    //BX Slider 
    if ($(window).width() <= 995) {
        $('.ca-slider').bxSlider({
            minSlides: 1,
            maxSlides: 1,
        });
    } else {
        $('.ca-slider').bxSlider({
            minSlides: 3,
            maxSlides: 3,
            slideWidth: 315,
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
		maxSlides:4, 
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
    //Dialog Box
    $(".premiumresearchdialog,.pop-pack,.addtopopup").dialog({
        autoOpen: false,
        draggable: false,
        resizable: false,
        modal: true,
        autoReposition: true,
        width: 450,
    });

    $(window).resize(function() {
        $(".premiumresearchdialog,.pop-pack,.addtopopup").dialog("option", "position", "center");
    });

    $(".premiumresearchdialog,.pop-pack").dialog({
        width: 980,
    });

    //View Details for ajax calls 
    $(".checkpremium,.pop-like,.report-ful-desc").on("click", function() {
        $('body').toggleClass('popup-overflow');
        var pagename = $(this).attr('title');
        $(".pop-pack").dialog("open").load(pagename + ".html");

    });

    //Close Dialog Popup
    $('.jqpop').on('click', '.dialog-close', function(e) {
        e.preventDefault();
        $('body').removeClass('popup-overflow');
        $(".pop-pack").dialog("close");
        return false;
    });

    // timer -- markets
    $('.defaultCountdown').countdown({
        until: new Date(2015, 10 - 1, 04)
    });

});


// header-top expansion Menu for web and mobile
function navigation() {
    var scr_width = $(document).width();
    console.log("Screen ", scr_width);
    if (scr_width > 995) {
        $('.first-level-menu > li > a').click(function(event) {
            $('.second-level').not($(this).closest('li').find('.second-level')).hide();
            $(this).closest('li').find('.second-level').slideToggle();
            $(this).closest('li').siblings().removeClass('active');
            $(this).closest('li').toggleClass('active');

            event.stopImmediatePropagation();
        });
        $('.second-level-menu > li').click(function() {
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


$(window).resize(function() {

    // slider tabs
    /*if($(document).width() < 995){
        var graphHeight = $('.ui-slider-tabs-content-container').css('height', $('.mar-main').height());
		$('.ui-slider-tabs-content-container').finish();
    }else{
        var graphHeight = $('.ui-slider-tabs-content-container').css('height', $('.mar-main').height());
		$('.ui-slider-tabs-content-container').finish();
    }*/

    // navigation
    navigation();

});

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

/* gotop */
$(window).scroll(function() {
    if ($(this).scrollTop() < 100) {
        $('#totop').fadeOut();
    } else {
        $('#totop').fadeIn();
    }
});
$('#totop').on('click', function() {
    $('html, body').animate({
        scrollTop: 0
    }, 'fast');
    return false;
});