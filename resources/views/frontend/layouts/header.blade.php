<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="jobguru | Job Board HTML Templates from Themescare">
   <meta name="keyword" content="Job, freelancer, employee, marketplace">
   <meta name="author" content="Themescare">
   <!-- Title -->
   <title>@yield('title')</title>
   <!-- Favicon -->
   <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
   <!--Bootstrap css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
   <!--Font Awesome css-->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

   <!--Magnific css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
   <!--Owl-Carousel css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
   <!--Animate css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
   <!--Select2 css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/select2.min.css') }}">
   <!--Slicknav css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}">
   <!--Bootstrap-Datepicker css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.min.css') }}">
   <!--Jquery UI css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}">
   <!--Perfect-Scrollbar css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/perfect-scrollbar.min.css') }}">
   <!--Site Main Style css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
   <!--Responsive css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>


   <!-- Header Area Start -->
   <header class="jobguru-header-area stick-top forsticky">
      <div class="menu-animation">
         <div class="container">
            <div class="row">
               <div class="col-lg-2">
                  <div class="site-logo">
                     <a href="index.html">
                        <img src="{{ asset('frontend/img/logo.png') }}" alt="jobguru" class="non-stick-logo" />
                        <img src="{{ asset('frontend/img/logo-2.png') }}" alt="jobguru" class="stick-logo" />
                     </a>
                  </div>
                  <!-- Responsive Menu Start -->
                  <div class="jobguru-responsive-menu"></div>
                  <!-- Responsive Menu Start -->
               </div>
               <div class="col-lg-8">
                  <div class="header-info">

                     <div class="phone">For USA Enquiries: &nbsp;&nbsp;<img
                           src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg"
                           style="height:12px; width15px;">&nbsp;&nbsp;<a style="color:#fff;" href="tel:+1 989 2682922"> +1
                           989 2682922</a></div>
                     <div class="phone">Call: <a style="color:#fff" href="tel:+91 7288818181">+91 7288818181</a> / <a
                           style="color:#fff" href="tel:+919392682922">939 2682922</a></div>
                     <div class="phone">Location: <select name="forma" onchange="location = this.value;">
                           <option value="">Select City</option>
                           <option value="#">Hyderabad</option>
                           <option value="#">Bangalore</option>
                           <option value="#">Chennai</option>
                           <option value="#">Mumbai</option>
                           <!-- <option value="https://www.anvayaa.com/locations/pune/">Pune</option>-->
                        </select>
                     </div>
                  </div>
                  <div class="header-menu">
                     <nav id="navigation">
                        <ul id="jobguru_navigation">
                           <li class="active has-children">
                              <a href="#">About</a>
                              <ul>
                                 <li><a href="index.html">Team</a></li>
                                 <li><a href="index-2.html">Advisory Board</a></li>
                              </ul>
                           </li>
                           <li class=" has-children">
                              <a href="#">Services</a>
                              <ul>
                                 <li class="has-inner-child">
                                    <a href="#">Healthcare</a>
                                 </li>
                                 <li><a href="browse-categories.html">Convenience</a></li>
                                 <li><a href="browse-companies.html">Engagement</a></li>
                                 <li><a href="single-candidates.html">Safety</a></li>
                                 <li><a href="submit-resume.html">Emergency</a></li>
                                 <li>
                                    <a href="#">Critical Care</a>

                                 </li>
                              </ul>
                           </li>
                           <li class="has-children">
                              <a href="#">Plans</a>
                              <ul>
                                 <li><a href="browse-candidates.html">Empower</a></li>
                                 <li><a href="single-company.html">Assure</a></li>
                                 <li><a href="post-job.html">Smart Care</a></li>

                              </ul>
                           </li>
                           <li>
                              <a href="#">Blogs</a>
                           </li>
                           <li class="has-children">
                              <a href="#">Community</a>
                              <ul>
                                 <li><a href="browse-candidates.html">Experience</a></li>
                                 <li><a href="single-company.html">Careers</a></li>
                                 <li><a href="post-job.html">Resources</a></li>

                              </ul>
                           </li>
                           <li>
                              <a href="#">Contact</a>
                           </li>

                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-2">
                  <div class="header-right-menu">
                     <ul>

                        <li><a href="#"><i class="fa fa-user"></i>sign up</a></li>
                        <li><a href="#"><i class="fa fa-lock"></i>login</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header Area End -->