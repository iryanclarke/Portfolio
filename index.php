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
  <link rel="stylesheet" href="css/css/mobile.css">
  <link rel="stylesheet" href="css/css/desktop.css" media="(min-width:50em)">
  <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.min.css">
  <!-- jQuery and js -->
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/include.js"></script>
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
            <p>Take a look around, check out my portfolio and what I'm all about, <br/>or you can <a href="contact.php">Check out my blog<span>&#187;</span></a></p>
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


    <section id="js-fadeInElement"  class="cards">
      <div class="cards">
        <div class="card">
          <div class="card-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
          </div>
          <div class="card-header">
            First Card
          </div>
          <div class="card-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
          <div class="card-stats">
            <ul>
              <li>98<span>Items</span></li>
              <li>298<span>Things</span></li>
              <li>923<span>Objects</span></li>
            </ul>
          </div>
        </div>
        
        <div class="card">
          <div class="ribbon-wrapper"><div class="ribbon">RIBBON</div></div>
          <div class="card-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-4.png" alt="">
          </div>
          <div class="card-header">
            Another Card
          </div>
          <div class="card-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
          <div class="card-stats">
            <ul>
              <li>98<span>Items</span></li>
              <li>298<span>Things</span></li>
              <li>923<span>Objects</span></li>
            </ul>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
          </div>
          <div class="card-header">
            The Last Card
          </div>
          <div class="card-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
          <div class="card-stats">
            <ul>
              <li>98<span>Items</span></li>
              <li>298<span>Things</span></li>
              <li>923<span>Objects</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php
        include 'footer.php';
    ?> 
    <script src="js/gAnalytics.js"></script>

  </body>    
</html>