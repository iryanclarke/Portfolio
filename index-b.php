<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type"/>
<meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

<title>Ian Ryan Clarke</title>
	<meta charset="utf-8" />
	<meta name="description" content="Ian's Portfolio" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- jQuery and js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.queryloader2.js"></script>
    <script src="js/include.js"></script>
    <link rel="stylesheet" href="css/desktop.css" media="(min-width:50em)">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="../css/desktop.css" media="(min-width:50em)">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <header>
      <div class="wrapper">
        <h1>Bourbon Neat Examples</h1>
        <a href="https://github.com/thoughtbot/neat/blob/gh-pages/_sass/desktop-example.scss" class="source">View desktop source</a>
        <a href="https://github.com/thoughtbot/neat/blob/gh-pages/_sass/mobile-example.scss" class="source">View mobile source</a>
      </div>
    </header>

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