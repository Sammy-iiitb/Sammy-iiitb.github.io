
/* ==================================================================================

    Template Name : Infinite
    Description : Professional & Creative Multipurpose Landing Page HTML5 Template
    Version : 1.3
    Author : Naveen Kumar

    IF YOU NEED ANY KIND OF HELP REGARDING TO THIS TEMPLATE
    SO, DIRECT E-MAIL US AT :- support@wpsolutiongroup.com


    Copyright 2016 WP Solution Group
    http://www.wpsolutiongroup.com/

===================================================================================== */



$(function() {
    "use strict";


/* ========================================
     Preloader
   ========================================= */
$(window).load(function() {
$('.pageloader').delay(500).slideUp(800);
  })



/* ========================================
     Smooth Scroll
   ========================================= */

$('a.goto, .navbar .nav a').smoothScroll({speed: 1200});




/* ========================================
     Main Menu scroll down effect
   ========================================= */
$(window).scroll(function () {
  if ($(window).scrollTop() > $("nav").height()) {
    $("nav.navbar-down").addClass("down");
  } else {
    $("nav.navbar-down").removeClass("down");
    $(".navbar-down .navMenuCollapse").collapse({toggle: false});
    $(".navbar-down .navMenuCollapse").collapse("hide");
    $(".navbar-down .navbar-toggle").addClass("collapsed");
  }
});

$('.main-menu .nav a').on('click', function(){
  if($('.navbar-toggle').css('display') !='none'){
    $(".navbar-toggle").click();
  }
});




/* ========================================
     Main Menu Social blinking effect
   ========================================= */

var SocBlink = $('.main-menu .social_blinker'),
MenuSoc = $('.main-menu .social');
SocBlink.on('click', function() {
  $(this).toggleClass('hidden');
  MenuSoc.toggleClass('appear');
});


MenuSoc.mouseleave(function() {
  $(this).removeClass('appear');
  SocBlink.removeClass('hidden');
});




/* ========================================
     Active Menu Highlighter
   ========================================= */
// Cache selectors
var topMenu = $(".main-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });




/* ====================================
     Bind to Scroll
   =================================== */
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   // Set/remove active class
   menuItems.parent().removeClass("active").end().filter("[href=#"+id+"]").parent().addClass("active");
})




/* ====================================
     Sliders Configuration
   =================================== */

$('.slider-fade-bg').slick({
  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: false,
  infinite: true,
  arrows: false,
  dots: false,
  fade:true,
  speed:3700,
  autoplaySpeed: 7000
});


$('.content_slide_1').slick({
  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: false,
  vertical: true,
  verticalSwiping: true,
  infinite: true,
  arrows: false,
  dots: true,
  adaptiveHeight:true
});


$('.testmonial_slider_1').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: false,
  autoplay:true,
  centerMode:true,
  pauseOnHover:false,
  centerPadding: '0px',
  dots: true
});

$('.company').slick({
  autoplay:true,
  focusOnSelect: true,
  infinite: true,
  arrows: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  centerMode: false,
  variableWidth: true,

  responsive: [
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1
    }
  }


  ]

});




/* ====================================
    Video PopUP
   =================================== */

$('.intro-video .play').magnificPopup({
  disableOn: 700,
  type: 'iframe',
  mainClass: 'mfp_zoom_out',
  removalDelay: 160,
  preloader: false,
  fixedContentPos: false
});




/* ====================================
    Portfolio Filter Effect
   =================================== */
$('#filters-container button').click(function(e) {
  $('#filters-container .filter-item-active').removeClass('filter-item-active');
  $(this).addClass('filter-item-active');
  var target = $(this).attr('data-filter');
  if( target == '*' ){
    target = '.item';
  }
  $('#grid-container .item .item-wrapper').addClass('animated fadeOut');

  setTimeout(function(){

    $('#grid-container .item').css({display:'none'});
    $('#grid-container .item .item-wrapper').get(0).className = 'item-wrapper';
    $('#grid-container '+target).each(function(){
      $(this).css({display:'block'});
      $(this).find('.item-wrapper').get(0).className = 'item-wrapper animated fadeIn';
    });
    setTimeout(function(){
      $('#grid-container .animated').removeClass('animated').removeClass('fadeIn');
    },1200);
  },800);

  e.preventDefault();
});




/* ====================================
    Portfolio PopUp Effect
   =================================== */

$('.portfolio').magnificPopup({
  delegate: '.image_pop',
  type: 'image',
  closeOnContentClick:true,
  closeOnBgClick:true,
  enableEscapeKey:true,
  tLoading: 'Loading image #%curr%...',
  mainClass: 'mfp-with-fade mfp-img-mobile',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          zoom: {
                enabled: true, // By default it's false, so don't forget to enable it
                duration: 800, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function
              },
              callbacks:{
                beforeClose:function(){

                  this.content.addClass('fadeIn');
                },
                close:function (){
                  this.content.addClass('fadeOut');

                }
              },
              image:{
               markup: '<div class="mfp-figure portfolio-pop-up">'+
               '<div class="mfp-close"></div>'+
               '<div class="mfp-img"></div>'+
               '<div class="mfp-bottom-bar portfolio_title">'+
               '<div class="mfp-title"></div>'+
               '<div class="mfp-counter"></div>'+
               '</div>'+
               '</div>',
               tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',
               cursor: 'mfp-zoom-out-cur', // class of the zoom icon

               titleSrc:function(item){
                return item.el.attr('title');
              }
            }
          });




/* ====================================
     Team Member PopUP Effect
   =================================== */
  $('.team').magnificPopup({
    type: 'inline',
    delegate: '.member_pop',
    preloader: true,
    closeOnContentClick:true,
    closeOnBgClick:true,
    enableEscapeKey:true,
    fixedContentPos: true,
    modal: true,
    gallery: {
      enabled: true
    },
    callbacks: {
      beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
     }
   }

 });

  $('.magnificPopUp_close').on( "click", function() {
    $.magnificPopup.close();
  });




/* ====================================
     Statistics
   =================================== */
(function( $ ) {
var elem = $('#statistics');
if (elem.length) {

  var inview = new Waypoint.Inview({
    element: elem[0],
    enter: function(direction) {
      $('.count span').countTo({
       formatter: function (value, options) {
        value = value.toFixed(options.decimals);
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        return value;
      }
    });
      inview.destroy();
    }
  });

}
})($);// function end





/* ====================================
       Mailchimp Form
   =================================== */
$('.mailchimp').ajaxChimp({
  callback: mailchimpCallback,
url: "http://wpsolutiongroup.us10.list-manage.com/subscribe/post?u=dfebf17589e5f97ee693a5a9c&amp;id=b2cd10112f"
 //Replace ^ this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".
});

function mailchimpCallback(resp) {
  if (resp.result === 'success') {
    $('.subscription-success').html('<i class="fa fa-thumbs-o-up"></i>' + resp.msg).css("opacity","1");
    $('.subscription-error').css("opacity","0");
  }
  else if (resp.result === 'error') {
    $('.subscription-error').html('<i class="fa fa-user-times"></i>' + resp.msg).css("opacity","1");
    $('.subscription-success').css("opacity","0");

  }
}



/*===================================================================
        Contact Form Send Email and Validation
  =================================================================*/
$('.contact-form, .registration').validator({
  disable:false
});

$("#contact-form").submit(function (e) {
  e.preventDefault();
  var name = $("#contact-name").val();
  var email = $("#contact-email").val();
  var subject = $("#contact-subject").val();
  var message = $("#contact-message").val();
  var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
  $.ajax({
    type: "POST",
    url: "sendmail/mail.php",
    data: dataString,
    success: function () {
      $('.form-success').css({"opacity" : "1"});
      $('.form-error').css({"opacity": "0"});
    },
    error:function(){
      $('.form-error').css({"opacity" : "1"});
      $('.form-success').css({"opacity": "0"});
    }
  });


});




/*===========================================================================
        Bootstrap Internet Explorer 10 in Windows 8 and Windows Phone 8 FIX
  ===========================================================================*/
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style');
  msViewportStyle.appendChild(
    document.createTextNode('@-ms-viewport{width:auto!important}'));
  document.querySelector('head').appendChild(msViewportStyle);
}





});



/*=================================================================
        Parallax Background
  =================================================================*/
$(window).stellar({
      responsive: true,
      horizontalScrolling: false,
      hideDistantElements: false,
      horizontalOffset: 0,
      verticalOffset: 0,
    });



/*=================================================================
        Particle Background
  =================================================================*/

	$('.particles-bg').particleground({
      dotColor: '#1ABC9C',
      particleRadius: 5
    });



/*=================================================================
        Google map
  =================================================================*/
 if(typeof $.fn.gMap !== 'undefined'){


			$('.google-map').each(function() {

				var $t = $(this),
					mapZoom = 15,
					mapAddress = $t.attr("data-address"),
					mapCaption = $t.attr("data-caption"),
					mapType = "ROADMAP",
					mapHeight = $t.attr("data-mapheight"),
					popUp = false;

				if ($t.attr("data-zoom") !== undefined) {
					mapZoom = parseInt($t.attr("data-zoom"),10);
				}

				if ($t.attr("data-mapHeight") !== undefined) {
					$t.css( "height", mapHeight+'px');
				}

				if ($t.attr("data-maptype") !== undefined) {
					mapType = $t.attr("data-maptype");
				}

				if ($t.attr("data-popup") !== undefined) {
					popUp = $t.data("popup");
				}

				$t.gMap({
					maptype: mapType,
					scrollwheel: false,
					zoom: mapZoom,
					markers: [{
						address: mapAddress,
						html: mapCaption,
						popup: popUp
					}],
					controls: {
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: false,
						streetViewControl: false,
						overviewMapControl: false
					}
				});

			});

		}




/*=================================================================
        Back to top
  =================================================================*/
  jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 500,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 2000,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.back-to-top-link');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('back-to-top-visible') : $back_to_top.removeClass('back-to-top-visible back-to-top-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
			$back_to_top.addClass('back-to-top-fade-out');
		}
	});

	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

 });
