// This file contains code that needs to be present on all pages

function smoothScroll(link) {  
  $('html, body').animate({scrollTop:$(link).position().top - 50 }, 'slow');
}

$(document).ready(function() {

  // Navigation Menu
  var menu = $('#navigation-menu');
  var menuToggle = $('#js-mobile-menu');
  var signUp = $('.sign-up');

  $(menuToggle).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle(function(){
      if(menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });
   
  $('.modal').click(function(){
    $(this).find('input[type=checkbox]').prop('checked', function(){
          return !this.checked;
      });
  });
  

  var element = document.getElementById("js-fadeInElement");
  $(element).addClass('js-fade-element-hide');

  $(window).scroll(function() {
    var elementTopToPageTop = $(element).offset().top;
    var windowTopToPageTop = $(window).scrollTop();
    var windowInnerHeight = window.innerHeight;
    var elementTopToWindowTop = elementTopToPageTop - windowTopToPageTop;
    var elementTopToWindowBottom = windowInnerHeight - elementTopToWindowTop;
    var distanceFromBottomToAppear = 200;

    if(elementTopToWindowBottom > distanceFromBottomToAppear) {
      $(element).addClass('js-fade-element-show');
    }
    else if(elementTopToWindowBottom < 0) {
      $(element).removeClass('js-fade-element-show');
      $(element).addClass('js-fade-element-hide');
    }
  });

  /*    
  // Dynamic content showing
  $('[data-block]').waypoint(function(direction) {
    if(direction === 'down') {


    }
  },{ offset: '75%'});
  */
});
