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
  <script src="js/waypoints.min.js"></script>
  <script src="js/include.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <?php
        include 'navigation.php';
    ?>  
    <section>
      <div class="side-image">
        <div class="images-wrapper"></div>
          <div class="content">
          <h1>Hi, I'm Ian Ryan Clarke</h1>
          <p>I am an outgoing Front-End web developer who is currently attending Carleton University for a Bachelor of Information Technology. I spend my free time making and contributing to open source projects on GitHub, hosting workshops at Carleton, and tinkering with my R/C helicopters.</p>
          <a onclick="smoothScroll('#js-fadeInElement'); return false">
            <button>Read more</button>
          </a>
        </div>
      </div>
    </section>

    <section class="bullets">
      <div id="js-fadeInElement" class="bullets">
        <div class="bullet two-col-bullet" data-block="Background">
          <div class="bullet-icon bullet-icon-1">
            <i class="fa fa-university fa-2x fa-inverse"></i>
          </div>
          <div class="bullet-content">
            <h2>Background</h2>
            <p>My interest and love for Web and Graphic design began way back in grade 9, when I took a tech class and began hashing out websites using good 'ol DreamWeaver's <b>design</b> view. <i>(I now shudder). I would spend many of my lunches making cool graphics and simple web pages!</i> </p>
            <p>I now currently attend Carleton University for the Bachelor of Information Technology, in the stream of Interactive Multimedia and Design. It is here where my love for Web Development and Illustration came to true fruition. </p>
            <p>If you would like a comprehensive list of where I've worked and some courses I have taken, please, check out my <a href="http://www.linkedin.com/profile/view?id=267357034">LinkedIn</a></p>
            </div>
        </div>  
        <div class="bullet two-col-bullet" data-block="Interests">
          <div class="bullet-icon bullet-icon-2">
            <i class="fa fa-paint-brush fa-2x fa-inverse"></i>
          </div>
          <div class="bullet-content">
            <h2>Interests</h2>
            <p>I spend most of my spare time reading web dev blogs such as Smashing Magazine, Abduzeedo, Net tuts, and David Walsh blog, and hacking around on projects I find cool! I absolutely have a soft spot for flat design, and I sometimes mess around in illustrator with some flat designs and complementary colour schemes.</p>
            <p>When I'm not nerding out on the computer, you can find me tinkering with my R/C helicopters, or playing Starcraft II and Age of Mythology with my friends. I also attend Web Related meetups in Ottawa, such as Ottawa Ruby, AngularJS and Ottawa JavaScript!</p>
            <p>I have also hosted and spoken at meetups I've organized for students in my program who wanted to learn more modern web development practices!</p>
          </div>
        </div>
        <div class="bullet two-col-bullet" data-block="Languages">
          <div class="bullet-icon bullet-icon-3">
            <i class="fa fa-comment fa-2x fa-inverse"></i>
          </div>
          <div class="bullet-content">
            <h2>Languages</h2>
            <p>I'm multi-lingual! :D</p>
              <ul>
                  <li><b>Front-End</b></li>
                  <li>SASS: I'm sassy (Also know LESS)</li>
                  <li>HTML5 (Probably a given)</li>
                  <li>JavaScript, plain and simple</li>
                  <li>jQuery</li>
              </ul>
              <ul>
                  <li><b>Server side:</b></li>
                  <li>PHP</li>
                  <li>ColdFusion</li>
                  <li>MySQL and AJAX</li>
              </ul>
          </div>
        </div>
        <div class="bullet two-col-bullet" data-block="Programs">
          <div class="bullet-icon bullet-icon-4">
            <i class="fa fa-desktop fa-2x fa-inverse"></i>
          </div>
          <div class="bullet-content">
            <h2>My Stack</h2>
            <p>Heres is my common local development stack that I use often</p>
                <ul>
                    <li>Sublime text 3: Bling bling with Seti UI theme</li>
                    <li>Grunt: SASS/CoffeeScript compilers and BrowserSync</li>
                    <li>Chrome: The browser of choice!</li>
                    <li>Git: Version control, the best. 'Nuff said.</li>
                    <li>Bourbon's Neat or Foundation 5</li>
                </ul>
                <p>I also have experience with:</p>
                <ul>
                    <li>Adobe Creative Suite (Photoshop, Illustrator, Fireworks, Premier Pro)</li>
                    <li>ColdFusion, MySQL, AJAX, JSON</li>
                    <li>C, C++, Actionscript 3.0</li>
                    <li>Microsoft Visual Studio, Autodesk Maya, Eclipse</li>
                </ul>
          </div>
      </div>
    </section>

       
   
    </div>


    <?php
        include 'footer.php';
    ?> 
    <script src="js/gAnalytics.js"></script>
   
</body>

</html>
