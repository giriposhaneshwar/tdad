(function($, window){

$(document).ready(function() {


    //Dialog Box
    $(".pop-pack,.pop-pack1,.share-pop").dialog({
        autoOpen: false,
        draggable: false,
        resizable: false,
        modal: true,
        autoReposition: true,
        width: 450,
    });

    $(window).resize(function() {
        $(".pop-pack").dialog("option", "position", "center");
        $(".pop-pack1").dialog("option", "position", "center");
		$(".share-pop").dialog("option", "position", "center");
    });

    $(".pop-pack").dialog({
        width: 980,
    });
    $(".pop-pack1").dialog({
        width: 500,
    });
	
    //View Details for ajax calls 
    $(".pop-like").on("click", function() {
        $('body').toggleClass('popup-overflow');
        var pagename = $(this).attr('data-val');
        $(".pop-pack").dialog("open").load(pagename + ".html");
    });
    $(".apply-car").on("click", function() {
        $('body').toggleClass('popup-overflow');
        var pagename = $(this).attr('data-val');
        $(".pop-pack1").dialog("open").load(pagename + ".html");
    });
	
	$('.like-box-btn').on('click', function() {
		$(this).find('.like-small').addClass('active');
        $('.like-box').show().delay(2000).fadeOut(800);
    });
	$('.like-box-btn1').on('click', function() {
		$(this).find('.share-1').addClass('active');
        $('.like-box').show().delay(2000).fadeOut(800);
    });

    //Close Dialog Popup
    $('.jqpop').on('click', '.dialog-close', function(e) {
        e.preventDefault();
        $('body').removeClass('popup-overflow');
        $(".pop-pack,.pop-pack1").dialog("close");
        return false;
    });
    //responsive Menu
    $('.responsivesec').on('click', function() {
        $('.navsec').slideToggle();
    });

    //Bxslider curosal
    $('.awards-curosal').bxSlider({
        slideWidth: 330,
        minSlides: 1,
        maxSlides: 3,
        moveSlides: 1,
    });

    // management slider
    $('.ceo-slider').bxSlider();

    //Custom Select
    $('.select').select2({
        minimumResultsForSearch: -1,
    });

    //locate us
    $('.curosal').bxSlider({
        slideWidth: 244,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 1,
        infiniteLoop: false
    });
    $('.tab-slide1 li a').on('click', function() {
        $('.tab-slide1 li a').removeClass('active-tab');
        $('.tab-slider-content1').hide();
        $(this).addClass('active-tab');
        var div_name = $(this).attr('data-val');
        $('#' + div_name).show();
    });
    //accordian
    $(".car-accordion").accordion({
        heightStyle: "content",
        collapsible: true
    });
    //Tabs
    $('.tabpages').tabs();

    //animation
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        mobile: true,
        live: true
    });
    wow.init();

	//Gallery Popup
	$(".gallerylst").lightGallery();
});


}(jQuery, window));