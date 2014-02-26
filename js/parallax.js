$(document).ready(function() {
	
/************** Content Loader  *********************/
	$("pics").queryLoader2();
	


/************** Browser Detection *******************/
	if (navigator.userAgent.indexOf('Firefox') != -1 && parseFloat(navigator.userAgent.substring(navigator.userAgent.indexOf('Firefox') + 8)) >= 3.6){
	 //Firefox
	 //Allow
	 }else if (navigator.userAgent.indexOf('Chrome') != -1 && parseFloat(navigator.userAgent.substring(navigator.userAgent.indexOf('Chrome') + 7).split(' ')[0]) >= 15){
	 //Chrome
	 //Allow
	 }else if(navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Version') != -1 && parseFloat(navigator.userAgent.substring(navigator.userAgent.indexOf('Version') + 8).split(' ')[0]) >= 5){
	 //Safari
	 //Allow
	 }else{
	 	alert('The use of Internet Explorer is not supported for this website. \n\n Please use Firefox, Chrome or Safari to view this webpage');
	 }
	
/************** Animating Content ******************/
	var myHeight;
    $('.element').each(function (i) {
        var myElement = $(this);
        myElement.data('params', {
           top1: $(this).css('top'),
            x1: $(this).css('left')
        });
        switch (i) {
			
		/*  STEP 3 PLANE */
        case 0: 
            myElement.data('params', {
                top0: 3600,
                x0: -3000,
                top1: $(this).css('top'),
                x1: $(this).css('left'),
				name : 'Satellite 1'
            });
            break;
			
		/*  STEP 4 PLANE */
        case 1:
            myElement.data('params', {
                top0: 4650,
                x0: -4000,
                top1: $(this).css('top'),
                x1: $(this).css('right'),
				name : 'Plane'
            });
            break;
			
		/*  STEP 5 PLANE */	
        case 2:
            myElement.data('params', {
                top0: 5800,
                x0: -5000,
                top1: $(this).css('top'),
                x1: $(this).css('left'),
				name : 'Satellite 2'
            });
            break;
			
		/*  STEP 6 PLANE */
        case 3:
            myElement.data('params', {
                top0: 600,
                x0: -660,
                top1: $(this).css('top'),
                x1: $(this).css('right'),
				name : 'Satellite 3'
            });
            break;
		/*  STEP 7 PLANE */
        case 4:
            myElement.data('params', {
                top0: 8600,
                x0: -7500,
                top1: $(this).css('top'),
                x1: $(this).css('left'),
				name : 'Satellite 4'
            });
            break;
			
			
		/* PARACHUTE PLANE */
		case 5:
            myElement.data('params', {
                top0: 650,
                x0: -850,
                top1: $(this).css('top'),
                x1: $(this).css('left'),
				name : 'Satellite 4'
            });
            break;
			
        }
    });

    function init() {
        myHeight = $(window).height();
        //$('header').css('height', myHeight - 300);
        $('section').css('min-height', Math.max(myHeight / 2 + 250, 600));
    }
    $(window).scroll(function () {
        var s_max = myHeight / 2 + 450;
		
        function move(p0, p1, s) {
            //return Math.min((-p0 + p1) / s_max * (0.2 * s) + p0, p1);
			return Math.min(p0 + (1 * s), p1);
        }
		
		function quickMove(p0, p1, s) {
            //return Math.min((-p0 + p1) / s_max * (0.2 * s) + p0, p1);
			return Math.min(p0 + (2 * s), p1);
        }
        var scrollTop = parseInt($(window).scrollTop());
        $('.element').each(function (i) {
			if(i == 5){
				var myX = quickMove($(this).data('params').x0, parseInt($(this).data('params').x1), scrollTop),
					myY = quickMove($(this).data('params').top0, parseInt($(this).data('params').top1), scrollTop);
			} else {
				var myX = move($(this).data('params').x0, parseInt($(this).data('params').x1), scrollTop),
					myY = move($(this).data('params').top0, parseInt($(this).data('params').top1), scrollTop);
			}
			
            if (i == 0 || i == 2 || i == 4 || i == 5) {
                $(this).stop().css({
                    left: myX + 'px',
                    top: myY + 'px'
                })
            } else {
                $(this).stop().css({
                    right: myX + 'px',
                    top: myY + 'px'
                })
            }
        })
    })
    init();


    $(window).resize(function () {
        init();
    }); 
	

	
	
/************** NAVIGATION  ******************/
	redrawDotNav();
	
	/* Scroll event handler */
    $(window).bind('scroll',function(e){
    	parallaxScroll();
		redrawDotNav();
    });
    
	/* Next/prev and primary nav btn click handlers */
	
	$("a[data-code]").click(function(){
		var val = $(this).data("code") ? $($(this).data("code")).offset().top - 70 : 0;
		$('html, body').animate({
			scrollTop: val
		},/* SPEED OF SCROLL */ 2000 , function() {
			parallaxScroll(); 
		});
	return false;
	});
	
    
    /* Show/hide dot lav labels on hover */
    $('nav#primary a').hover(
    	function () {
			$(this).prev('h1').show();
		},
		function () {
			$(this).prev('h1').hide();
		}
    );
});

/************** PARALLAX EFFECT ******************/
	function parallaxScroll(){
		
		var scrolled = $(window).scrollTop();
		$('#parallax-bg1').css('top',(0-(scrolled*.25))+'px');
		$('#parallax-bg2').css('top',(0-(scrolled*.5))+'px');
		$('#mocap-robot').css('top',(0+(scrolled*.01))+'px');
		replaceRobot();
	}

/* Replaces the robot picture according to what section you are viewing */
function replaceRobot(){
	var scrolled = $(window).scrollTop();
	var section0Top = 0;
	var section1Top =  $('#step1').offset().top - 230;
	var section2Top =  $('#step2').offset().top - 70;
	var section3Top =  $('#step3').offset().top - 70;
	var section4Top =  $('#step4').offset().top - 70;
	var section5Top =  $('#step5').offset().top - 70;
	var section6Top =  $('#step6').offset().top - 70;
	var section7Top =  $('#step7').offset().top - 70;
	var section8Top =  $('#step8').offset().top - 70;
	var section9Top =  $('#about').offset().top - 70;
	
	// Changed the src of the robot id
	if(scrolled >= section0Top){   $('#parachute').attr('src', 'img/parachute2.png');   $('#parachute').css('opacity', 0.0)}
	if(scrolled >= section1Top){   $('#parachute').attr('src', 'img/parachute2.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section2Top){   $('#parachute').attr('src', 'img/parachute3.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section3Top){   $('#parachute').attr('src', 'img/parachute4.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section4Top){   $('#parachute').attr('src', 'img/parachute5.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section5Top){   $('#parachute').attr('src', 'img/parachute6.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section6Top){   $('#parachute').attr('src', 'img/parachute7.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section7Top){   $('#parachute').attr('src', 'img/parachute8.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section8Top){   $('#parachute').attr('src', 'img/parachute9.png');   $('#parachute').css('opacity', 1.0)}
	if(scrolled >= section9Top){   $('#parachute').attr('src', 'img/parachute10.png');  $('#parachute').css('opacity', 1.0)}
	
}


/* Set navigation dots to an active state as the user scrolls */
function redrawDotNav(){
	var section1Top =  0;
	var section2Top =  $('#step1').offset().top - 70;
	var section3Top =  $('#step2').offset().top - 70;
	var section4Top =  $('#step3').offset().top - 70;
	var section5Top =  $('#step4').offset().top - 70;
	var section6Top =  $('#step5').offset().top - 70;
	var section7Top =  $('#step6').offset().top - 70;
	var section8Top =  $('#step7').offset().top - 70;
	var section9Top =  $('#step8').offset().top - 70;
	var section11Top =  $('#about').offset().top - 70;
	// The top of each section is offset by half the distance to the previous section.
	//var section2Top =  $('#step1').offset().top - (($('#step2').offset().top - $('#step1').offset().top) / 2);
	//var section3Top =  $('#step2').offset().top - (($('#about').offset().top - $('#step2').offset().top) / 2);
	//var section4Top =  $('#about').offset().top - (($(document).height() - $('#about').offset().top) / 2);;
	$('nav#primary a').removeClass('active');
	if($(document).scrollTop() >= section1Top && $(document).scrollTop() < section2Top){
		$('nav#primary a.welcome').addClass('active');
	} else if ($(document).scrollTop() >= section2Top && $(document).scrollTop() < section3Top){
		$('nav#primary a.step1').addClass('active');
	} else if ($(document).scrollTop() >= section3Top && $(document).scrollTop() < section4Top){
		$('nav#primary a.step2').addClass('active');
	} else if ($(document).scrollTop() >= section4Top && $(document).scrollTop() < section5Top){
		$('nav#primary a.step3').addClass('active');
	} else if ($(document).scrollTop() >= section5Top && $(document).scrollTop() < section6Top){
		$('nav#primary a.step4').addClass('active');
	} else if ($(document).scrollTop() >= section6Top && $(document).scrollTop() < section7Top){
		$('nav#primary a.step5').addClass('active');
	} else if ($(document).scrollTop() >= section7Top && $(document).scrollTop() < section8Top){
		$('nav#primary a.step6').addClass('active');
	} else if ($(document).scrollTop() >= section8Top && $(document).scrollTop() < section9Top){
		$('nav#primary a.step7').addClass('active');
	} else if ($(document).scrollTop() >= section9Top && $(document).scrollTop() < section10Top){
		$('nav#primary a.step8').addClass('active');
	} else if ($(document).scrollTop() >= section11Top){
		$('nav#primary a.about').addClass('active');
	}
	
}
