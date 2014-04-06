// This file contains code that needs to be present on all pages


  $(function(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
      var ww = ( $(window).width() < window.screen.width ) ? $(window).width() : window.screen.width; //get proper width
      var mw = 320; // min width of site
      var ratio =  ww / mw; //calculate ratio
      if( ww < mw){ //smaller than minimum size
       $('#Viewport').attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + ww);
      }else{ //regular size
       $('#Viewport').attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
      }
    }
  });

 var visible = false;
 var previous;
  function showContent() {
    var $text = $('.test1');
    if ( visible ) {
      $text.slideUp('slow',function(){
        $text.addClass('hide')
             .slideDown(0);
      });
    } else {
      $text.slideUp(0,function(){
        $text.removeClass('hide')
             .slideDown('slow');
      });
    }
    visible = ! visible;
    previous = $text; 
  }
