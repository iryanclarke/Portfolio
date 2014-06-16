<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta id="Viewport" name="viewport" width="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<title>Portfolio</title>


    <!-- jQuery and js -->
	<script src="js/modernizr.custom.37797.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.queryloader2.js"></script>
    <script src="js/iGrid.js"></script>
    <script src="js/include.js"></script>
    <!-- Stylesheets-->
    <link rel="stylesheet" media="all" href="css/banner.css" />
    <link rel="stylesheet" media="all" href="css/pages.css" />
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>

    <?php
        include 'banner.php';
    ?> 
   
       <div class="content">
                <div class="label">
                      <h2><span style="background-color:#006ba4;padding:10px">Portfolio</span></h2>
                      <p>&nbsp;</p>
                      <div style="clear:both"></div>
                </div>   
       </div>         
       
        <div class="section5">  
            <div class="content minitab-lp hide">
                <h3>MiniTab landing page</h3>
                <p>The Minitab Landing page was created for Kivuto Solutions, in order to replace the previous non-responsive version and give the page a visual update! I was the only person working on developing the website, and it was completed around Feburary 2014. You can find it <a href="http://onthehub.com/minitab/">here</a></p>
                <p>Roles: Web Developer and QA tester.</p>
                <p>Technologies used: Foundation 5, PHP, SASS, jQuery</p>
            </div> 
            <div class="content sa-lp hide">
                <h3>Student Advantage landing page</h3>
                <p>The Student Advantage Landing page was created for Kivuto Solutions, in order to create a new streamlined way of generating leads for the Microsoft Student Advantage program. Similar to the Minitab page, I was the only person working on developing the website, and it was completed around April 2014. You can find it <a href="http://kivuto.com/microsoft-student-advantage-deployment/">here</a></p>
                <p>Roles: Web Developer and QA tester.</p>
                <p>Technologies used: Foundation 5, PHP, SASS, jQuery, form.js</p>
            </div> 
            <div class="content et-poster hide">
                <h3>ET Movie poster</h3>
                <p>This was a side project I did just to experiment around with Adobe Illustrator, and creating some complex vector objects.</p>
                <p>Roles: Designer</p>
                <p>Technologies used: Adobe Illustrator and VectorScribe</p>
            </div> 
            <div class="content scroller hide">
                <h3>Scroller Guage</h3>
                <p>This was a little hacking project I worked on, I intended it to put on any scrolling/parallax websites I made to give a cool visual representation of how far you had scrolled. It's still under development, but I intend for the max value to automatically be set to the document height! You can find it at <a href="http://iryanclarke.com/scroller-guage/">here</a></p>
                <p>Roles: Web Developer and awesome hacker!</p>
                <p>Technologies used: Ember.js and jQuery</p>
            </div> 
            <div class="content illustrated-stick hide">
                <h3>Illustrated stickmen</h3>
                <p>I created these stickmen for my application to Shopify in May 2014, giving illustrations to each slide explaining various topics such as 'The amazing environment at Shopify' and 'The amazing team at Shopify'! If you want to look at the illustrations and website, check them out <a href="http://iryanclarke.com/myshopify/">here</a> </p>
                <p>Roles: Designer, Illustrator and Web Developer</p>
                <p>Technologies used: Adobe Illustrator and VectorScribe</p>
            </div>
            <div class="content falling-motion hide">
                <h3>Falling Motion</h3>
                <p>This parallax website was made for a university course 'Design Studio', in order to make an interactive timeline of how motion capture is performed. I was part of a 4 person team to complete this project, and we used scrum boards and agile methodologies. You can view it <a href="http://iryanclarke.com/fallingmotion/">here</a> </p>
                <p>Roles: Senior Web Developer and Illustrator</p>
                <p>Technologies used: Adobe Dreamweaver, TortiseSVN, jQuery, Adobe Illustrator</p>
            </div>
        </div>   
    
        <div class="section1">  
        	<main>
            <h3>Click on the images to see more information!</h3>
                <hr />
                <div class="photoset">
                    <div class="photoset-row">
                        <figure class="photoset-item">
                            <a onClick="showContent('.minitab-lp')"><img src="img/photogallery/minitab-desktop.png" alt="MiniTab landing page" title="MiniTab landing page" /></a>
                            <figcaption><h3>MiniTab landing page</h3> <h4>Web Development</h4></figcaption>
                        </figure>
                    </div>
                    <div class="photoset-row">
                        <figure class="photoset-item">
                            <a onClick="showContent('.sa-lp')"><img src="img/photogallery/student-advantage.png" alt="MiniTab landing page" title="MiniTab landing page" /></a>
                            <figcaption><h3>Student Advantage landing page.</h3> <h4>Web Development</h4></figcaption>
                        </figure>
                        <figure class="photoset-item">
                            <a onClick="showContent('.et-poster')"><img src="img/photogallery/et-poster.png" alt="'E.T.' Movie poster" title="'E.T.' Movie poster" /></a>
                            <figcaption><h3>'E.T.' Movie poster</h3> <h4>Illustration</h4></figcaption>
                        </figure>
                    </div>
                    <div class="photoset-row">
                        <figure class="photoset-item">
                            <a onClick="showContent('.scroller')"><img src="img/photogallery/scrollerguage.png" alt="Web Application" title="Web Application" /></a>
                            <figcaption><h3>Dynamic scroller guage</h3> <h4>Web Application</h4></figcaption>
                        </figure>
                        <figure class="photoset-item">
                            <a onClick="showContent('.illustrated-stick')"><img src="img/photogallery/stickmen-illustrations.png" alt="Stickmen for Shopify application" title="Stickmen for Shopify application" /></a>
                            <figcaption><h3>Awesome stickmen</h3> <h4>Illustration</h4></figcaption>
                        </figure>
                        <figure class="photoset-item">
                            <a onClick="showContent('.falling-motion')"><img src="img/photogallery/fallingmotion.png" alt="Falling Motion parallax website" title="Falling Motion parallax website" /></a>
                            <figcaption><h3>Falling Motion parallax website</h3> <h4>Web Development</h4></figcaption>
                        </figure>
                    </div>
                </div>
            </main>
        <p>&nbsp;</p>
        </div>   
        
    <script src="js/gAnalytics.js"></script> 
         
    <div class="footer">
    	<p1>Design and Development by Ian Clarke</p1>
    </div>
</body>

</html>