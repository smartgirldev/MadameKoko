<?php
session_start();

if(!isset($_SESSION['loggedin']))
{
    die("To access this page, you need to <a href='index.php'>LOGIN</a>"); // Make sure they are logged in!
} // What the !isset() code does, is check to see if the variable $_SESSION['loggedin'] is there, and if it isn't it kills the script telling the user to log in!*/

echo "Hello there,". $_SESSION['username']."! Welcome to my site!"; 

/*if(isset($_SESSION['username']))
{
	echo $_SESSION['username'];
} else {
	echo "Session is NOT set";
}*/

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Madame Koko : Home</title>
	<link rel="stylesheet" href="/scripts/css/styles.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="/scripts/css/movingbox.css" type="text/css" media="screen">
	<script src="/scripts/js/jquery-1.3.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/scripts/js/slider.js" type="text/javascript" charset="utf-8"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=1.3.2'></script>
  <script type='text/javascript' src='/scripts/js/jquery.color-RGBa-patch.js'></script>
  <script type='text/javascript' src="/scripts/js/example.js"></script>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
div class="main">
	<div class="header">
            <table width="645" border="0" style="margin-left: 450px;">
              <tr>
                <td align="center"><img src="images/name_logo.jpg" width="645" height="141" /></td>
              </tr>
              <tr>
                <td align="center" style="color:#FF0099">Domina &#8226; Fetishist &#8226; Model &#8226; Entertainer</td>
              </tr>
            </table>
   </div>
   <br>
<div class="nav-wrap">
		<ul class="group" id="example-one">
            <li class="current_page_item"><a href="#one">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="wishlist.php">Wishlist</a></li>
            <li><a href="bookings.php">Bookings</a></li>
        </ul>
</div>

<section id="main"><!-- #main content area -->
	  <p>&nbsp;</p>
		<p><br></p>
	  <div id="slider-gallery">    
     <img class="scrollButtons left" src="images/leftarrow.png">
  	  <div style="overflow: hidden;" class="scroll-gallery">
	
				<div class="scrollContainer-gallery">
	
          			<div class="panel" id="panel_1">
						<div class="inside">
							<img src="images/gallery/koko01.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>

          			<div class="panel" id="panel_2">
						<div class="inside">
							<img src="images/gallery/koko02.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
				
          			<div class="panel" id="panel_3">
						<div class="inside">
							<img src="images/gallery/koko03.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
					
					<div class="panel" id="panel_4">
						<div class="inside">
							<img src="images/gallery/koko04.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
					
					<div class="panel" id="panel_5">
						<div class="inside">
							<img src="images/gallery/koko05.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
                    
                    <div class="panel" id="panel_6">
						<div class="inside">
							<img src="images/gallery/koko06.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
                    
                    <div class="panel" id="panel_7">
						<div class="inside">
							<img src="images/gallery/koko07.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
                    
                    <div class="panel" id="panel_8">
						<div class="inside">
							<img src="images/gallery/koko08.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
                    
                    <div class="panel" id="panel_9">
						<div class="inside">
							<img src="images/gallery/koko09.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
                    
                    <div class="panel" id="panel_10">
						<div class="inside">
							<img src="images/gallery/koko10.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>

          			<div class="panel" id="panel_11">
						<div class="inside">
							<img src="images/gallery/koko11.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
				
          			<div class="panel" id="panel_12">
						<div class="inside">
							<img src="images/gallery/koko12.jpg" alt="" />
							<!--<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>-->
						</div>
					</div>
         </div>

				<div id="left-shadow"></div>
				<div id="right-shadow"></div>

       </div>

			<img class="scrollButtons right" src="images/rightarrow.png">

     </div>
        
<article>
  <p>&nbsp;</p>
  <p>This site is in development. Please check back again soon as it evolves...</p>
  <p><a href="http://www.sanctuarylax.com/member_profile/8414/show_public" target="_new">Sanctuary Studios LAX</a></p>
</article>

</section><!-- end of #content -->
<section id="footer-area">
	<section id="footer-outer-block">
			<aside class="footer-segment first">
					<h4>&nbsp;</h4>
						<ul>
							<li><a href="http://www.facebook.com/dominakoko" target="_new"><img src="images/socialicons/facebook.png" width="25" height="25" /></a></li>
						</ul>
			</aside>
            <!-- end of #first footer segment -->

			<aside class="footer-segment second">
					<h4>&nbsp;</h4>
						<ul>
							<li><a href="http://www.fetlife.com/users/1596717" target="_new"><img src="images/socialicons/fetlife.jpg" width="58" height="25" /></a></li>
						</ul>
			</aside>
			<!-- end of #second footer segment -->
            
			<aside class="footer-segment third">
					<h4>&nbsp;</h4>
						<!--<ul>
							<li><a href="#">one linkylink</a></li>
							<li><a href="#">two linkylinks</a></li>
							<li><a href="#">three linkylinks</a></li>
						</ul>-->
			</aside>
            <!-- end of #third footer segment -->
					
		<aside class="footer-segment last">
					<h4>&nbsp;</h4>
						<p>&copy; 2013 <a href="#">www.madamekoko.com</a></p>
                        <div class="footer">Designed by <a href="http://www.smartgirldevelopment.com" target="_new">SmartGirl Development</a></div>
			</aside><!-- end of #fourth footer segment -->

	</section><!-- end of footer-outer-block -->

</section><!-- end of footer-area -->
</body>
</html>