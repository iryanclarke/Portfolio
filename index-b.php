<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Ian Ryan Clarke</title>
	<meta charset="utf-8" />
	<meta name="description" content="Ian's Portfolio" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- jQuery and js -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Stylesheets-->
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/desktop.css" media="(min-width:50em)">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <header class="navigation">
      <div class="navigation-wrapper">
        <a href="javascript:void(0)" class="logo">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="">
        </a>
        <a href="" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
        <div class="nav">
          <ul id="navigation-menu">
            <li class="nav-link"><a href="javascript:void(0)">About Me</a></li>
            <li class="nav-link"><a href="javascript:void(0)">Portfolio</a></li>
            <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
            <li class="nav-link more"><a href="javascript:void(0)">More</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Submenu Item</a></li>
                <li><a href="javascript:void(0)">Another Item</a></li>
                <li class="more"><a href="javascript:void(0)">Item with submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                    <li><a href="javascript:void(0)">Another Item</a></li>
                  </ul>
                </li>
                <li class="more"><a href="javascript:void(0)">Another submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu</a></li>
                    <li><a href="javascript:void(0)">An Item</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <section>
    <div class="bullets">
      <div class="bullet one-col-bullet">
        <div class="bullet-icon bullet-icon-1">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2.png
    " alt="">
        </div>
        <div class="bullet-content">
          <h2>This Bullet Title</h2>
          <p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
          </div>
      </div>  
      <div class="bullet one-col-bullet">
        <div class="bullet-icon bullet-icon-2">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3.png" alt="">
        </div>
        <div class="bullet-content">
          <h2>Another Bullet Title</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
        </div>
      </div>
      <div class="bullet one-col-bullet">
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


    <h3>Basic</h3>

    <section class="zero">
    <code>@include outer-container;</code>
      <div id="alpha">
        <code>@include span-columns(6);</code>
      </div>
      <div id="beta">
        <code>@include span-columns(6);<br></code>
      </div>
    </section>


    <h3>Multiple rows</h3>

    <section class="first">
    <code>@include outer-container;</code>
      <div id="alpha">
        <code>(1)</code>
      </div>
      <div id="beta">
        <code>@include span-columns(11);<br>
        @include omega();</code>
      </div>
        <div id="gamma">
        <code>@include span-columns(2);</code>
      </div>
      <div id="delta">
        <code>@include span-columns(10);<br>
        @include omega();</code>
      </div>
      <div id="epsilon">
        <code>@include span-columns(3);</code>
      </div>
      <div id="zeta">
        <code>@include span-columns(9);<br>
        @include omega();</code>
      </div>
      <div id="eta">
        <code>@include span-columns(4);</code>
      </div>
      <div id="theta">
        <code>@include span-columns(8);<br>
        @include omega();</code>
      </div>
      <div id="iota">
        <code>@include span-columns(5);</code>
      </div>
      <div id="kappa">
        <code>@include span-columns(7);<br>
        @include omega();</code>
      </div>
      <div id="lambda">
        <code>@include span-columns(6);</code>
      </div>
      <div id="mu">
        <code>@include span-columns(6);<br>
        @include omega();</code>
      </div>
    </section>

    <h3>Nesting columns</h3>

    <section class="second">
    <code>@include outer-container;</code>
       <div id="alpha">
        <code>@include span-columns(4);</code>
      </div>
      <div id="beta">
        <code class="block">@include span-columns(8);</code>
        <aside>
          <code>@include span-columns(4 of 8);</code>
        </aside>
        <article>
          <code>@include span-columns(4 of 8);</code>
        </article>
      </div>
    </section>

    <h3>Table grid</h3>

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

    <h3>Shifting columns</h3>

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

    <h3>Media Queries</h3>

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

    <footer>
    <a href="/" class="back-button">Back</a>
    </footer>


  </body>    
</html>