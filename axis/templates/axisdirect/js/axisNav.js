$(function() {

  var markers = {
    a1: "",
    a2: "",
    a3: ""
  };

  $(".researchmenu li a").on("click", function() {
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

  });
  $(".menu-section a").on("click", function(e) {
    e.preventDefault();
    var level = $(this).parent().attr('data-type');
    var locUrl = $(this).attr('href');
    var curLvl, sendReq = 0;

    if (level == 'url') {
      curLvl = "first level";

      if (locUrl == 'javascript:void(0)') {
        sendReq = 0;
      } else {
        sendReq = 1;
      }

    } else if (level == 'url1') {
      curLvl = "second level";

      if (locUrl == 'javascript:void(0)') {
        sendReq = 0;
      } else {
        sendReq = 1;
      }


    } else if (level == 'url2') {
      curLvl = "Third level";

      if (locUrl == 'javascript:void(0)') {
        sendReq = 0;
      } else {
        sendReq = 1;
      }

    }

    console.log(curLvl, locUrl, sendReq);

    /*$.each($('.menu-section a'), function(i, n){
      console.log(i, n);
    });*/



    // console.log(markers, $(this).attr('href'));


  });
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