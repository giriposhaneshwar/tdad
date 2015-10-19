$=jQuery.noConflict();
$(document).ready(function() {

////////////for joomla start////////////////////////////
// code for popup dialog for joomla
	$(".researchmenu li a").on("click",function(){
		//alert("hai");
	//	$(this).removeClass("active");
	//$(this).addClass("active");
		localStorage.setItem("activeclass3", $(this).attr("data-type"));
		localStorage.setItem("activeclass", localStorage.getItem("activeclass"));
		localStorage.setItem("activeclass2", localStorage.getItem("activeclass2"));	
			//return false;
		});

//code for store active class value in localstorage
$(".thrid-level-menu li a").on("click",function(){
	var loc= $(this).parent().parent().parent().parent().closest("li").find("a").attr("id");
	//console.log(loc);
	localStorage.setItem("activeclass", loc);	
	
	var loc= $(this).parent().parent().closest("li").find("a").attr("id");
	var loc2= $(this).attr("data-type");
	//console.log(loc);
	localStorage.setItem("activeclass2", loc);	
	localStorage.setItem("activeclass3", loc2);	
	//return false;
	//console.log("hai setItem");
	});
	
	$("a").on("click",function(){
		if( $(this).attr("data-noremove")!="1")
		{
		 localStorage.setItem("activeclass", "");
		 localStorage.setItem("activeclass2", "");	
		}
	});
    if($('.thrid-level-menu li').attr('current')){
        //$(this).addClass("active");
        console.log($(this));
    };
    
    if(localStorage.getItem("activeclass")!="")
    {
        console.log(localStorage.getItem("activeclass"));
        console.log(localStorage.getItem("activeclass2"));
        console.log(localStorage.getItem("activeclass3"));
        var loc= localStorage.getItem("activeclass");
        //  console.log(loc);
        $("#"+loc).addClass("active");
    //      console.log("hai getItem");
    }
    
    if(localStorage.getItem("activeclass3")!="")
    {
        console.log(localStorage.getItem("activeclass"));
        console.log(localStorage.getItem("activeclass2"));
        console.log(localStorage.getItem("activeclass3"));
        var loc= localStorage.getItem("activeclass3");
    //  console.log(loc);
    $(".researchmenu li a[data-type="+loc+"]").parent().parent().find("li").removeClass("active");
    $(".researchmenu li a[data-type="+loc+"]").parent().addClass("active");
    //$("#"+loc).addClass("active");
//      console.log("hai getItem");
    }
/*	
if(localStorage.getItem("activeclass2")!="")
    {
        var loc= localStorage.getItem("activeclass2");
    //  console.log(loc);
//  $("#"+loc).parent().addClass("active");
        $("#"+loc).parent().parent().find("li").removeClass("active");
            $("#"+loc).parent().addClass("active");
//      console.log("hai getItem");
    }
    */
//////////////////////////////for joomla end //////////////////////////////////


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

    // cart more menu -- reasearch module
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
        $('.sort-by').toggleClass('active');
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.sort-name').length
        if (!p) {
            $('.sort-list').hide();
            $('.sort-by').removeClass('active');
        }
    });
    $('.sort-list li a').on('click', function() {
        $('.sort-select-name').html($(this).text());
        alert(i);
        $('.sort-list').hide();
        $('.sort-by').removeClass('active');
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
        $(this).closest('.stock-sec').find('.wish-suces').show();
    });
    $('.cancel-wish').on('click', function() {
        $(this).closest('.stock-sec').find('.schesme-wish').hide();
    });

    //wish list inside page
    $('.wish-compare-in').on('click', function() {
        if (!$(this).is(':checked')) {
            $('.sel-msg-fly-in').show();
            $(this).parentsUntil('stock-details').find('.wishlist-in').addClass('wishwork');
        }
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
    /*
	
   setTimeout(function() {
		$('.invest-drop').removeClass('coath-text');
        $('.coatch-overlay').fadeOut(300);
    }, 5000);
    $(document).click(function() {
		$('.invest-drop').removeClass('coath-text');
        $('.coatch-overlay').fadeOut(300);
    });*/

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

    // reasearch time and term -- reasearch module
    $(".rea-mod-time input[type='radio']").click(function() {
        var res_time = $('input[name="time"]:checked').val();
        $('.invest-items-time').text(res_time);
    });

    function terms() {
        var allVals = [];
        var res_time = $('input[name="term"]:checked').each(function() {
            allVals.push($(this).val());
        });
        $('.invest-items-term').text(allVals) + "";
    }
    $(".rea-mod-time input[type='checkbox']").click(function() {
        terms();
    });

    //Responsive more-menu	
    $(".res-moremenu").on('click', function() {
        $('.header-menu').toggle();
    });
    var reswid = $(document).width();
    if (reswid < 995) {
        $(document).click(function(e) {
            var p = $(e.target).closest('.res-moremenu,.header-menu').length
            if (!p) {
                $(".header-menu").Hide();
            }
        });
    }

    //Portfolio menu	
    $('.fill-box,.fil-fly-btns').on('click', function() {
        $('.filter-content-box').toggle();
    });
    $(document).on('click', function(e) {
        var p = $(e.target).closest('.fill-box,.filter-content-box').length
        if (!p) {
            $('.filter-content-box').hide();
        }
    });

    // Alert message
    $('.sucess-alert-btn').on('click', function() {
        var $div2 = $('.def-msg-none');
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

    //Custom Select
    $('.select').select2({
        minimumResultsForSearch: -1,
    });

    // tabs with slider -->Markets
    var pos, slides;
    pos = slides = $(".tabs-new li").length;
    $(".next-btn").click(function() {
        if (pos > 0) {
            $(".tabs-new ul").stop(true, true).animate({
                left: "-=55px"
            }, 500);
            pos--;
        }
    });
    $(".prev-btn").click(function() {
        if (pos < slides) {
            $(".tabs-new ul").stop(true, true).animate({
                left: "+=55px"
            }, 500);
            pos++;
        }
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

    $(".addtopopup").dialog({
        width: 800
    });

	
	$(".pop-pack").dialog({
		closeOnEscape: false,
		position: { my: "center", at: "center", of: window,collision: 'fit' }
    });
    //View Details for ajax calls 
    $(".checkpremium,.pop-like,.report-ful-desc").on("click", function() {
        $('body').toggleClass('popup-overflow');
        //var pagename = $(this).attr("data-url");
       // $(".pop-pack").dialog("open").load(pagename);
		
		 $('.pop-pack').load($(this).attr("data-url"));
		 $( ".pop-pack").dialog( "open" );

    });

    //Close Dialog Popup
    $('.jqpop').on('click', '.dialog-close', function(e) {
        e.preventDefault();
        $('body').removeClass('popup-overflow');
        $(".pop-pack").dialog("close");
        return false;
    });
	

});

$(window).resize(function() {
    navigation();
});

// header-top expansion Menu for web and mobile
function navigation() {
    var scr_width = $(document).width();
    if (scr_width > 995) {
        $('.first-level-menu > li > a').click(function(event) {
            $('.second-level').not($(this).closest('li').find('.second-level')).hide();
            $(this).closest('li').find('.second-level').slideToggle();
            $(this).closest('li').siblings().removeClass('active');
            $(this).closest('li').toggleClass('active');

            event.stopImmediatePropagation();

            var secondLevelMenu = $(event.target.parentElement.children[1]);

            console.log($(secondLevelMenu[0]).children());
            /*if(secondLevelMenu.has('ul > li.active > ul')){
                console.log("This is menu");
            }else{
                console.log("This is not a menu");
            }*/

            if($('.second-level > ul > li').children().length > 1){
                $('.second-level').css('height', '144');
            }else{
                $('.second-level').css('height', '90');
            }
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

            // if($('.second-level > ul > li').children().length > 1){
            //     $('.second-level').css('height', '144');
            //     console.log("Large Menu");
            // }else{
            //     $('.second-level').css('height', '90');
            //     console.log("Small Menu");
            // }
        });

        $('.second-level > ul > li').on('click', function(e){
            if($(this).children().length > 1){
                $('.second-level').css('height', '144');
            }else{
                $('.second-level').css('height', '90');
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

$(document).ready(function() {
    $(".slide-tab").sliderTabs({
        mousewheel: false,
        position: "top",
        transition: "fade",
        tabSlideLength: 200,
        tabHeight: 100
    });
	/*$("#popupdialog").dialog({
        width: '40%',
        modal: true,
        autoOpen: false, 
        closeOnEscape: true,
    }); 
      
    $( ".pop-like" ).click(function() {

      $('#popupdialog').load($(this).attr("data-url"));

      $( "#popupdialog").dialog( "open" );
    });*/	
	
	$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
		options.async = true;
	});
	//$('.tabs').tabs();
});