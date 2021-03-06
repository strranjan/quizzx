<!--
Theme Name: alive-Responsive-Coming-Soon-Template 
Author URI: http://webthemez.com/
Description: alive is a minimal, responsive, business coming soon / landing page / one page HTML5 template based on Bootstrap 3.2.0. This theme is clean and fast, easy to customize multipurpose, includes Services and Contact form, 400+ Font Awesome icons, custom backgrounds and much more!
-->
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>webthemez - alive-Responsive-Coming-Soon-Template</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="{{ asset('assets/external/css/bootstrap.min.css')}}" />
<link href="{{ asset('assets/external/css/animate.css')}}" rel="stylesheet" media="screen">
<link rel="stylesheet" href="{{ asset('assets/external/css/styles.css')}}" />
<link href="{{ asset('assets/external/font/css/font-awesome.min.css')}}" rel="stylesheet">
</head>

<body>
<nav id="mainNav">
  <div id="menuToggle"><i class="fa fa-bars"></i></div>
  <ul class="menuLinks">
    <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
    <li><a href="#services" class="scroll-link">Services</a></li>
    <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
    <li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
  </ul>
</nav>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container">
    <div class="container">
      <div class="row">
        <!-- <div class="logo"> <img src="images/logo.png" alr='logo'/> </div> -->
      </div>
      <div class="heading text-center">
        <h2>Our new site is coming soon!!!</h2>
        <strong>Stay tuned for something amazing</strong> </div>
      <div class="countdown styled"></div>
    </div>
  </div>
</section>
<!--  -->
<section id="aboutUs">
  <div class="container">
    <div class="row feature design">
      <div class="six columns right">
        <h2>Our Company</h2>
        <p>Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat fabulas complectitur deterruisset at pro. Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea. No soleat fabulas prodesset vel, ut quo solum dicunt.
          Nec et jority have suffered alteration. </p>
        <p>Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea. No soleat fabulas prodesset vel, ut quo solum dicunt.
          Nec et amet vidisse mentitumsstie percipitoleat fabulas. </p>
      </div>
      <div class="six columns feature-media left"> <img src="images/picture-136.png" alt=""> </div>
    </div>
  </div>
</section>
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Contact Us</h2>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
        </div>
      </div>
      <div class="row mrgn30">
	  <div id="contactfrm">
	  <form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert('Thank you for your feedback!');">
							<div class="col-sm-12">
							<div class="form-group">
							<input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
							</div>
							<div class="form-group">
							<input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
							</div>					
							<div class="form-group">
							<textarea name="Message" rows="10" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
							</div>
							<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
							</div>
							</div>
						</form>		
					</div>	
       
      </div>
    </div>
    <!--/.container--> 
  </div>
</section>
<footer>
  <div class="container">
    <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
    <div class="clear"></div>
    <!--CLEAR FLOATS--> 
  </div>
</footer>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2014 | All Rights Reserved -- Template by <a href="http://webThemez.com">WebThemez.com</a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="{{ asset('assets/external/js/modernizr-latest.js')}}"></script> 
<script src="{ asset('assets/external/js/jquery-1.8.2.min.js')}}" type="text/javascript"></script> 
<script src="{ asset('assets/external/js/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{ asset('assets/external/js/jquery.nav.js')}}" type="text/javascript"></script> 
<script src="{ asset('assets/external/js/waypoints.js')}}"></script> 
<script src="{ asset('assets/external/js/Backstretch.js')}}" type="text/javascript"></script> 
<script src="{ asset('assets/external/js/custom.js')}}" type="text/javascript"></script> 
<script type="{ asset('assets/external/text/javascript')}}" src="js/jquery.countdown.js"></script>
</body>
</html>
