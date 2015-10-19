$(document).ready(function() {
  $('.awardItems ul').bxSlider({
    minSlides: 1,
    maxSlides: 3,
    slideWidth: 305,
    slideMargin: 15,
    responsive: true,
    controls: true,
    auto: true
  });
  $('.ceo-slider').bxSlider({});
  var acchit = $('.accordianList ul.innerList > li table');
  var accToggle = $('.accordianList ul.innerList > li .hiddenContent');
  acchit.on('click', function(e) {
    accToggle.slideUp(300);
    $(this).next().slideToggle(500);
    $(this).addClass('active');
  });

});