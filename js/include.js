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

(function() {
        var path = '//easy.myfonts.net/v2/js?sid=248436(font-family=Industry+Bold)&sid=248437(font-family=Industry+Book)&sid=248443(font-family=Industry+Medium)&sid=248444(font-family=Industry+Light)&key=2VmyGbxjzn',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
})();
