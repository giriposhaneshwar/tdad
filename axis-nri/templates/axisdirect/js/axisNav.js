$(function() {
  /*$(".researchmenu li a").on("click", function() {
    //alert("hai");
    //  $(this).removeClass("active");
    //$(this).addClass("active");
    localStorage.setItem("activeclass3", $(this).attr("data-type"));
    localStorage.setItem("activeclass", localStorage.getItem("activeclass"));
    localStorage.setItem("activeclass2", localStorage.getItem("activeclass2"));
    //return false;
  });*/
  
  $.fn.hitMenuNav = function(e){
    // e.preventDefault();
    var $this = $(this);
    var locUrl = $this.attr('href');
    var curId = e.currentTarget.attributes.id.value;
    var curEleId = $this.attr('id');

    if (locUrl != 'javascript:void(0)') {
      // get level
      var curPos = $this.parent().attr('data-level');

      // curEle.parent().closest('li').attr('data-level')
      if (curPos == 2) {
        localStorage.setItem('active3', curEleId);
        localStorage.setItem('active2', curEleId);
        localStorage.setItem('active1', $this.parent().closest('ul.first-level-menu').find('li a').attr('id'));
      } else if (curPos == 3) {
        localStorage.setItem('active3', curEleId);
        localStorage.setItem('active2', $this.parent().closest('ul.second-level-menu').find('li a').attr('id'));
        localStorage.setItem('active1', $this.parent().closest('ul.first-level-menu').find('li a').attr('id'));
      }
    } else {
      // console.log("Clicked", $(this))
    }
  }

  //code for store active class value in localstorage
  $(".menu-section a").on('click', function(e){
    $(this).hitMenuNav(e);
  });

  function makeActive() {
    // get local store data
    var a = localStorage.getItem('active1');
    var b = localStorage.getItem('active2');
    var c = localStorage.getItem('active3');

    // $('#' + a).parent().addClass('active');
    $('#' + b).parent().addClass('active');
    $('#' + c).parent().addClass('active');
    $('#' + b).parent().parent().closest('li').addClass('active');
    // tirgger the classes
  }
  makeActive();
});



// =================================   Old Code
////////////for joomla start////////////////////////////
// code for popup dialog for joomla

/*$(".researchmenu li a").on("click", function() {
  //alert("hai");
  //  $(this).removeClass("active");
  //$(this).addClass("active");
  localStorage.setItem("activeclass3", $(this).attr("data-type"));
  localStorage.setItem("activeclass", localStorage.getItem("activeclass"));
  localStorage.setItem("activeclass2", localStorage.getItem("activeclass2"));
  //return false;
});
//code for store active class value in localstorage
$(".second-level-menu li a").on("click", function(e) {
  // e.preventDefault();
  // var loc = $(this).parent().parent().parent().parent().closest("li").find("a").attr("id");
  var loc = $(this).closest(".second-level").prev().attr("id");
  // console.log($(this));
  localStorage.setItem("activeclass", loc);
  var loc = $(this).parent().parent().closest("li").find("a").attr("id");
  var loc2;
  if ($(this).attr("href") != 'javascript:void(0)') {
    $(this).attr('data-noremove', '1');
    loc2 = e.currentTarget.attributes.id.value;
    // localStorage.setItem("activeclass", loc);
    // localStorage.setItem("activeclass2", loc);
    // localStorage.setItem("activeclass3", loc2);
  } else {
    loc2 = $(this).attr("data-type");
  }
  localStorage.setItem("activeclass2", loc);
  localStorage.setItem("activeclass3", loc2);
  // console.log("1", localStorage.getItem('activeclass')); 
  // console.log("2", localStorage.getItem('activeclass2')); 
  // console.log("3", localStorage.getItem('activeclass3'));
  // //console.log(loc);

  //return false;
  //console.log("hai setItem");
});
$(".menu-section a").on("click", function(e) {
  // e.preventDefault();
  var getLevel = $(this).parent().attr('data-level');

  if (getLevel == '2') {
    $(this).addClass('active').siblings().removeClass('active').closest('li').addClass('active');
  }
  if ($(this).attr("data-noremove") != "1") {
    localStorage.setItem("activeclass", "");
    localStorage.setItem("activeclass2", "");
  }
  console.log("Remove", $(this).attr("data-noremove"));
});
if ($('.thrid-level-menu li').attr('current')) {
  //$(this).addClass("active");
  console.log($(this));
};
if (localStorage.getItem("activeclass") != "") {
  console.log(localStorage.getItem("activeclass"));
  console.log(localStorage.getItem("activeclass2"));
  console.log(localStorage.getItem("activeclass3"));
  var loc = localStorage.getItem("activeclass");
  var loc2 = localStorage.getItem("activeclass2");
  //  console.log(loc);
  $("#" + loc).parent().addClass("active");
  $("#" + loc).next().find('.current').addClass("active").siblings().removeClass('active');
       console.log("hai getItem", $("#" + loc + " .current"));
}
if (localStorage.getItem("activeclass3") != "") {
  console.log(localStorage.getItem("activeclass"));
  console.log(localStorage.getItem("activeclass2"));
  console.log(localStorage.getItem("activeclass3"));
  var loc = localStorage.getItem("activeclass3");
  //  console.log(loc);
  $(".researchmenu li a[data-type=" + loc + "]").parent().parent().find("li").removeClass("active");
  $(".researchmenu li a[data-type=" + loc + "]").parent().addClass("active");
  //$("#"+loc).addClass("active");
  //      console.log("hai getItem");
}*/


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