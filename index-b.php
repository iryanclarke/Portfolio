<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Ian Ryan Clarke</title>
	<meta charset="utf-8" />
	<meta name="description" content="Ian's Portfolio" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Stylesheets-->
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/desktop.css" media="(min-width:50em)">
  <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.min.css">
  <!-- jQuery and js -->
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/main.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <?php
        include 'navigation.php';
    ?> 

    <section class="first">
        <div class="intro-text">
            <h2>Hey, I'm Ian!</h2>
            <h4>Welcome to my website</h4>
            <p>Take a look around, check out my portfolio and what I'm all about, <br/>or you can <a href="contact.php">Drop me a line<span>&#187;</span></a></p>
        </div>
    </section>

    <section class="bullets">
      <div class="bullets">
        <div class="bullet three-col-bullet">
          <div class="bullet-icon bullet-icon-1">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2.png
      " alt="">
          </div>
          <div class="bullet-content">
            <h2>This Bullet Title</h2>
            <p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
            </div>
        </div>  
        <div class="bullet three-col-bullet">
          <div class="bullet-icon bullet-icon-2">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3.png" alt="">
          </div>
          <div class="bullet-content">
            <h2>Another Bullet Title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
          </div>
        </div>
        <div class="bullet three-col-bullet">
          <div class="bullet-icon bullet-icon-3">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_4.png" alt="">
          </div>
          <div class="bullet-content">
            <h2>Last Bullet Title</h2>
            <p>Lorem ipsum sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
          </div>
        </div> 
      </div>
    </section>


    <section class="second">
    <code>@include outer-container;</code>
      <div class="progress-bar">
        <span class="meter" style="width: 60%"></span>
      </div>
      <div class="progress-bar-indication">
        <span class="meter" style="width: 60%">
          <p>60%</p>
        </span>
      </div>
      <div class="progress-bar-indication">
        <span class="meter" style="width: 95%">
          <p>95%</p>
        </span>
      </div>
    </section>


    <section class="third">
      <code>@include outer-container;</code>
      <div id="dummy">
        <code>@include span-columns(12);<br>
          @include row(table);</code>
      </div>
      <div id="alpha">
         <aside>
         <code>@include span-columns(4);<br>
         @include pad();</code>
        </aside>
        <article>
        <code>
          @include span-columns(8);<br>
          @include reset-display;<br>
          @include pad(); <br>
        </code>
        </article>
      </div>
    </section>


    <section class="fourth">
      <code>@include outer-container;</code>
      <div id="alpha">
        <code>@include span-columns(6);<br>
          @include shift(3);</code>
      </div>
    </section>

    <h3>Automatic rows</h3>
    <div class="code">
      <code>@include outer-container;</code>
    </div>

    <section class="fifth">
      <div class="box">
        <pre>
    li.block {
      @include span-columns(3);
      @include omega(4n);
    }</pre>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
        <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
        <div class="box">
         <code>li.block</code>
      </div>
    </section>


    <section class="sixth">
    <pre>
    @include outer-container;
    $mobile: new-breakpoint(max-width 500px 4);
    </pre>
      <div id="alpha">
    <pre>
    @include span-columns(4);

    @include media($mobile) {
      @include span-columns(3);
    }
    </pre>

      </div>
      <div id="beta">
    <pre>
    @include span-columns(8);

    @include media($mobile) {
      @include span-columns(3);
    }
    </pre>
      </div>
    </section>

        
    <?php
        include 'footer.php';
    ?> 
    <script src="js/gAnalytics.js"></script>

  </body>    
</html>