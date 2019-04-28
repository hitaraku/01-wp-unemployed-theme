/* --------------------
* impact-mu rotation
-------------------- */

var el = document.getElementById("impact-mu");
var st = window.getComputedStyle(el, null);
var tr = st.getPropertyValue("-webkit-transform") ||
		 st.getPropertyValue("-moz-transform") ||
		 st.getPropertyValue("-ms-transform") ||
		 st.getPropertyValue("-o-transform") ||
		 st.getPropertyValue("transform") ||
		 "Either no transform set, or browser doesn't do getComputedStyle";

// split matrix(0, 0, 0, 0, 0, 0). angle can get caluclation from matrix element.
var values = tr.split('(')[1],
	values = values.split(')')[0],
	values = values.split(',');
var a = values[0]; 
var b = values[1]; 
var c = values[2]; 
var d = values[3]; 

// angle calc from matrix elements
var angle = Math.round(Math.asin(b) * (180/Math.PI));

// header-title-impact rotate
$("#impact-mu").rotate({
  bind:
  {
	mouseover : function() {
	$(this).rotate({animateTo:angle+180})
  },
  mouseout : function() {
	$(this).rotate({animateTo:20})
	}
  }
});

/* --------------------
* sticky and menu tag
-------------------- */
$(document).ready(function() {
  $(window).on('load resize', function(){
    if ($(window).width() > 480) {
      $('#header-menu').addClass('js--section-features');
    } else {
      $('#header-menu').removeClass('js--section-features');
    }  
  });
  /* sticky */
  if ($(window).width() >= 480 ){
    /* For the sticky navigation */
    $('.js--section-features').waypoint(function(direction) {
        if (direction == "down") {
            $('#nav-sticky').addClass('sticky');
			$('#nav-sticky').css("display", "block");
			$('.section-lifechoice').css("margin-top", "50px");
        } else {
            $('#nav-sticky').removeClass('sticky');
			$('#nav-sticky').css("display", "none");
			$('.section-lifechoice').css("margin-top", "0px");
        }
    }, {
      offset: '15px;'
    });
  } 

  /* mobile menu */
  $("#mobile-menu").click(function() {
    $(".customize-support").toggleClass("pushy-open-left");
    if($('#header-menu').hasClass('pushy-left')) {
      $('#header-menu').toggleClass('pushy-left');
    }
  });
  $(".site-overlay").click(function() {
    $(".customize-support").toggleClass("pushy-open-left");
    if($('#header-menu').hasClass('pushy-left')) {
      //has
    } else {
      $('#header-menu').toggleClass('pushy-left');
    }
  });
});
