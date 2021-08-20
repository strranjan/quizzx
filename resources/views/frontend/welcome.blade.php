@extends('frontend.layouts.footer')
@extends('frontend.layouts.content')
@extends('frontend.layouts.header')
@section('title') G10 Assist @endsection

@section('content')

<!--Home Video Start-->
 <section class="home-video-banner parallax" data-jarallax-video="video.mp4" style="z-index:-1;">
      <video autoplay muted loop id="myVideo" style="position:fixed;">
         <source src="{{ asset('frontend/video.mp4') }}" type="video/mp4">
         Your browser does not support HTML5 video.
      </video>

      <div class="banner-area">
         <div class="banner-caption container">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 content-home">
                     <div class="banner-welcome">

                        <div class="home_section_txt">
                           <p>#EldersFirstFestival <span>Celebrating #ElderHour with 1 Million Elders</span></p><a
                              class="animation" href="https://emoha.com/elders-first-festival/">Sign Up</a>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Home Video End-->




   <!-- Video Area Start -->
   <section class="jobguru-video-area section_100" style="background:url(/frontend/img/landing-page.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <img src="{{ asset('frontend/img/landing-page.jpg') }}">
            </div>
         </div>
      </div>
   </section>
   <!-- Video Area End -->

   <section class="jobguru-banner-area">
      <div class="banner-slider owl-carousel">
         <div class="banner-single-slider slider-item-1">
            <div class="slider-offset"></div>
         </div>
         <div class="banner-single-slider slider-item-2">
            <div class="slider-offset"></div>
         </div>
         <div class="banner-single-slider slider-item-3">
            <div class="slider-offset"></div>
         </div>
      </div>

   </section>
   <!-- Banner Area End -->

   <!-- Happy Freelancer Start -->
   <section class="jobguru-happy-freelancer-area ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="site-heading">
                  <h2>What is <span>Emoha?</span></h2>
                  <p>Emoha is a virtual community that offers elders access to a range of support & services to enable
                     them to live a more comfortable life in their own home.

                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Happy Freelancer End -->


   <!-- Pricing Area Start -->
   <section class="jobguru-pricing-area ">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="site-heading">
                  <h2>Membership Benefits at Home</h2>
                  <h3>Designed to Empower Elders</h3>

               </div>
            </div>
         </div>
         <div class="row">
            <div class="box">
               <div
                  class="benefit-box phone1 wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  data-wow-delay="0.1s"
                  style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                  <div>
                     <h3>Emergency</h3>
                  </div>
                  <div class="ben-des">
                     <p>Feel secure</p>
                  </div>
                  <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                        data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('fVu93kWNuR0')"><i
                           class="fa fa-play">&nbsp;</i></a></div>
                  <div class="ben-phone-cont"><img alt="Emoha" class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/phone-without-shadow.png">
                     <div class="ben-real-image"><img alt="Emoha" class="img-responsive"
                           src="https://emoha.com/sites/default/files/home2021/emoha-benefits-1.webp"></div>
                  </div>
               </div>
               <div
                  class="benefit-box phone2 wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  data-wow-delay="0.2s"
                  style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                  <div>
                     <h3>Health Monitoring</h3>
                  </div>
                  <div class="ben-des">
                     <p>Stay healthy</p>
                  </div>
                  <div class="ben-phone-cont"><img alt="Emoha" class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/phone-without-shadow.png">
                     <div class="ben-real-image"><img alt="Emoha" class="img-responsive"
                           src="https://emoha.com/sites/default/files/home2021/emoha-benefits-2.webp"></div>
                  </div>
                  <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                        data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('aZRTWrya8qw')"><i
                           class="fa fa-play">&nbsp;</i></a></div>
               </div>
               <div
                  class="benefit-box phone3 wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  data-wow-delay="0.3s"
                  style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                  <div>
                     <h3>Events</h3>
                  </div>
                  <div class="ben-des">
                     <p>Stay busy</p>
                  </div>
                  <div class="ben-phone-cont"><img alt="Emoha" class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/phone-without-shadow.png">
                     <div class="ben-real-image"><img alt="Emoha" class="img-responsive"
                           src="https://emoha.com/sites/default/files/home2021/emoha-benefits-3.webp"></div>
                  </div>
                  <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                        data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('NCxUejN8z10')"><i
                           class="fa fa-play">&nbsp;</i></a></div>
               </div>
               <div
                  class="benefit-box phone4 wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  data-wow-delay="0.4s"
                  style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                  <div>
                     <h3>Convenience</h3>
                  </div>
                  <div class="ben-des">
                     <p>Get COVID Support</p>
                  </div>
                  <div class="ben-phone-cont"><img alt="Emoha" class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/phone-without-shadow.png">
                     <div class="ben-real-image"><img alt="Emoha" class="img-responsive"
                           src="https://emoha.com/sites/default/files/home2021/emoha-benefits-4.webp"></div>
                  </div>
                  <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                        data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('44CU4V5QGIE')"><i
                           class="fa fa-play">&nbsp;</i></a></div>
               </div>
               <div
                  class="benefit-box phone5 wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  data-wow-delay="0.5s"
                  style="visibility: visible;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                  <div>
                     <h3>Safety</h3>
                  </div>
                  <div class="ben-des">
                     <p>Stay safe</p>
                  </div>
                  <div class="ben-phone-cont"><img alt="Emoha" class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/phone-without-shadow.png">
                     <div class="ben-real-image"><img alt="Emoha" class="img-responsive"
                           src="https://emoha.com/sites/default/files/home2021/emoha-benefits-5.webp"></div>
                  </div>
                  <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                        data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('X9AN8voQmiI')"><i
                           class="fa fa-play">&nbsp;</i></a></div>
               </div>
               <div
                  class="benefit-box phone6 wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  data-wow-delay="0.6s"
                  style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                  <div>
                     <h3>Vaccination</h3>
                  </div>
                  <div class="ben-des">
                     <p>Fight COVID fear</p>
                  </div>
                  <div class="ben-phone-cont"><img alt="Emoha" class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/phone-without-shadow.png">
                     <div class="ben-real-image"><img alt="Emoha" class="img-responsive"
                           src="https://emoha.com/sites/default/files/home2021/emoha-benefits-6.webp"></div>
                  </div>
                  <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                        data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('ItEX6fFu3U8')"><i
                           class="fa fa-play">&nbsp;</i></a></div>
               </div>
               <div
                  class="benefit-box phone7 wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                  data-wow-delay="0.7s"
                  style="visibility: visible;-webkit-animation-delay: 0.7s; -moz-animation-delay: 0.7s; animation-delay: 0.7s;">
                  <div>
                     <h3>Home Care</h3>
                  </div>
                  <div class="ben-des">
                     <p>Stay fit</p>
                  </div>
                  <div class="ben-phone-cont"><img alt="Emoha" class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/phone-without-shadow.png">
                     <div class="ben-real-image"><img alt="Emoha"
                           src="https://emoha.com/sites/default/files/home2021/emoha-benefits-7.webp"></div>
                  </div>
                  <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                        data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('YKYDnKK6chc')"><i
                           class="fa fa-play">&nbsp;</i></a></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Pricing Area End -->


   <!-- Hire-2 Area Start -->
   <section class="jobguru-hire-2-area ">
      <div class="empower_video">
         <div class="ripple-background client-rightanim">
            <div class="circle-bounce xxlarge shade1">&nbsp;</div>
            <div class="circle-bounce xlarge shade2">&nbsp;</div>
            <div class="circle-bounce large shade3">&nbsp;</div>
            <div class="circle-bounce mediun shade4">&nbsp;</div>
            <div class="circle-bounce small shade5">&nbsp;</div>
         </div>
         <div class="ripple-background client-leftanim">
            <div class="circle-bounce xxlarge shade1">&nbsp;</div>
            <div class="circle-bounce xlarge shade2">&nbsp;</div>
            <div class="circle-bounce large shade3">&nbsp;</div>
            <div class="circle-bounce mediun shade4">&nbsp;</div>
            <div class="circle-bounce small shade5">&nbsp;</div>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div
                     class="empower-txt wow fadeInLeft animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                     data-wow-delay="0.3s"
                     style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                     <h2>It is time to get India’s most comprehensive at-home services for your <span
                           style="color:#333">elderly parents</span></h2>
                     <p>From remote health monitoring, to emergency support and a dedicated care manager to coordinate
                        COVID support, empower them with everything they need to live a safe, healthy and energized life
                        in the comfort of their own home.</p><a class="scorllon" href="javascript:void(0)"
                        onclick="clickformset()" style="margin-top:20px">Sign Up</a>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div
                     class="empower-img wow fadeInRight animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated"
                     data-wow-delay="0.3s"
                     style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                     <div class="playbtn animation"><a class="animation video_on_click" data-target="#modal-fullscreen"
                           data-toggle="modal" href="javascript:void(0)" onclick="onYouTube1('N7mbhZh2rGo')"><i
                              class="fa fa-play">&nbsp;</i></a></div><img class="img-responsive"
                        src="https://emoha.com/sites/default/files/home2021/videobg-image.webp">
                  </div>
               </div>
            </div>
         </div>


      </div>
   </section>
   <!-- Hire-2 Area End -->


   <!-- Blog Area Start -->
   <section class="jobguru-blog-area ">
      <div class="container">
         <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <a class="nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" 
                  role="tab" aria-controls="home" aria-selected="true">
                  <div class="tabsicons"><img
                        src="https://emoha.com/sites/default/files/mainwebsitebanner/ourplans/icon1_tab.webp"></div>
                  <h2>Emoha Empower</h2>
</a>
               </li>
               <li class="nav-item" role="presentation">
                  <a href="#profile" class="nav-link" id="profile-tab" data-bs-toggle="tab" role="tab" aria-controls="profile" aria-selected="false">
                  <div class="tabsicons"><img
                        src="https://emoha.com/sites/default/files/mainwebsitebanner/ourplans/icon2_tab.webp"></div>
                  <h2>Emoha Assure</h2>
</a>
               </li>
               <li class="nav-item" role="presentation">
                  <a href="#contact" class="nav-link" id="contact-tab" data-bs-toggle="tab" role="tab" aria-controls="contact" aria-selected="false">
                  <div class="tabsicons"><img
                        src="https://emoha.com/sites/default/files/mainwebsitebanner/ourplans/icon3_tab.webp"></div>
                  <h2>Emoha smart care</h2>
                  </a>
               </li>

            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row"><div class="col-sm-4"><div class="subs_left_img"><div class="subs_img_box"><img class="img-responsive" src="https://emoha.com/sites/default/files/mainwebsitebanner/ourplans/img_emoha.webp"><div class="subs_priceplan"><strong>Rs. 999/month*</strong><br>*GST extra</div></div></div></div><div class="col-sm-8"><div class="subs_plan_des_txt"><p>Feel empowered with all the essential services needed for your parents to live a safe and comfortable life at home.</p><p>Recommended for elders who are generally in good health and need personalized attention, monitoring of overall wellbeing, assistance with coordination of COVID-support and other errands, and would like to make new friends and stay active.</p><ul><li>Regular Care Calls 5x/week to check on health and wellbeing</li><li>1 Doctor Consultation</li><li>24x7 Emergency Coordination</li><li>24x7 Helpdesk to assist with scheduling with COVID lab tests, vaccination, oxygen, COVID isolation facility and other support as required</li><li>Assistance with errands via third party providers**</li><li>India's first Elder App with notifications for children</li><li>Interactive Virtual Activities for emotional wellbeing</li><li>Electronic Health Records to digitize and share medical records electronically</li><li>Exclusive Discounts and Offers</li></ul><div class="subs_plan_special"><p>Covers upto 2 elders per household</p><p>**Emoha assists solely with scheduling of services with third-parties. All services provided by third-parties will be billed separately.</p></div><div class="subs_small_txt"><p>Please note that currently there are severe delays in scheduling of lab tests, delivery and availability of medications and oxygen concentrators / cylinders and nursing support. Emoha will make full attempts at fulfilling the need, but will not be responsible for delays from third parties.</p></div><div class="row"><div class="col-sm-4"><div class="subs_selectplan"><p><em class="fa fa-rupee">&nbsp;</em>3,536.00/<strong class="planmonths">3 Months</strong></p><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H7bbr9owMX1zb4" async="">
<!--//--><![CDATA[// ><!--
//--><!]]>
</script><span class="razorpay-payment-button svelte-ohbfj8"><a href="https://razorpay.com/payment-button/pl_H7bbr9owMX1zb4/view/?utm_source=payment_button&amp;utm_medium=button&amp;utm_campaign=payment_button" type="submit" class="PaymentButton PaymentButton--dark PaymentButton--rzpTheme PaymentButton--rzp-dark-standard svelte-ekc7fv"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svelte-ekc7fv"><path d="M7.077 6.476l-.988 3.569 5.65-3.589-3.695 13.54 3.752.004 5.457-20L7.077 6.476z" fill="#fff" class="svelte-ekc7fv"></path><path d="M1.455 14.308L0 20h7.202L10.149 8.42l-8.694 5.887z" fill="#fff" class="svelte-ekc7fv"></path></svg> <div class="PaymentButton-contents svelte-ekc7fv"><span class="PaymentButton-text svelte-ekc7fv">Buy Now</span> <div class="PaymentButton-securedBy svelte-ekc7fv">Secured by Razorpay</div></div></a></span></form></div></div><div class="col-sm-4"><div class="subs_selectplan"><p><em class="fa fa-rupee">&nbsp;</em>7,072.00/<strong class="planmonths">6 Months</strong></p><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H7bwtz1HaJRt0N" async="">
<!--//--><![CDATA[// ><!--
//--><!]]>
</script><span class="razorpay-payment-button svelte-ohbfj8"><a href="https://razorpay.com/payment-button/pl_H7bwtz1HaJRt0N/view/?utm_source=payment_button&amp;utm_medium=button&amp;utm_campaign=payment_button" type="submit" class="PaymentButton PaymentButton--dark PaymentButton--rzpTheme PaymentButton--rzp-dark-standard svelte-ekc7fv"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svelte-ekc7fv"><path d="M7.077 6.476l-.988 3.569 5.65-3.589-3.695 13.54 3.752.004 5.457-20L7.077 6.476z" fill="#fff" class="svelte-ekc7fv"></path><path d="M1.455 14.308L0 20h7.202L10.149 8.42l-8.694 5.887z" fill="#fff" class="svelte-ekc7fv"></path></svg> <div class="PaymentButton-contents svelte-ekc7fv"><span class="PaymentButton-text svelte-ekc7fv">Buy Now</span> <div class="PaymentButton-securedBy svelte-ekc7fv">Secured by Razorpay</div></div></a></span></form></div></div><div class="col-sm-4"><div class="subs_selectplan"><p><em class="fa fa-rupee">&nbsp;</em>14,145.00/<strong class="planmonths">12 Months</strong></p><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H7bzI78zTTTLhi" async="">
<!--//--><![CDATA[// ><!--
//--><!]]>
</script><span class="razorpay-payment-button svelte-ohbfj8"><a href="https://razorpay.com/payment-button/pl_H7bzI78zTTTLhi/view/?utm_source=payment_button&amp;utm_medium=button&amp;utm_campaign=payment_button" type="submit" class="PaymentButton PaymentButton--dark PaymentButton--rzpTheme PaymentButton--rzp-dark-standard svelte-ekc7fv"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svelte-ekc7fv"><path d="M7.077 6.476l-.988 3.569 5.65-3.589-3.695 13.54 3.752.004 5.457-20L7.077 6.476z" fill="#fff" class="svelte-ekc7fv"></path><path d="M1.455 14.308L0 20h7.202L10.149 8.42l-8.694 5.887z" fill="#fff" class="svelte-ekc7fv"></path></svg> <div class="PaymentButton-contents svelte-ekc7fv"><span class="PaymentButton-text svelte-ekc7fv">Buy Now</span> <div class="PaymentButton-securedBy svelte-ekc7fv">Secured by Razorpay</div></div></a></span></form></div></div></div></div></div></div>
               </div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="row"><div class="col-sm-4"><div class="subs_left_img"><div class="subs_img_box"><img class="img-responsive" src="https://emoha.com/sites/default/files/mainwebsitebanner/ourplans/iStock-115009850_Assure.webp"><div class="subs_priceplan"><strong>Rs. 6000/month</strong><br>*GST exempt</div></div></div></div><div class="col-sm-8"><div class="subs_plan_des_txt"><p>A comprehensive at-home elder care plan with personalized home visits.</p><p>Recommended for elders who have chronic health conditions that require regular monitoring by an interdisciplinary clinical team, in addition to personalized support with errands.</p><p>The Assure Plan includes all of the features of Empower in addition to:</p><ul><li>24x7 Emergency Response (in-person) with India’s first paramedic responder for elders</li><li>Monthly doctor home visit</li><li>Monthly physio home Visit</li><li>2x Monthly Dietician Calls</li><li>Personalized diet plan</li><li>4-hour support for household errands</li></ul><div class="subs_plan_special"><p>*Covers upto 2 elders per household</p><p>*Currently available only in Delhi NCR</p></div><div class="subs_small_txt"><p>Please note that currently there are severe delays in scheduling of lab tests, delivery and availability of medications and oxygen concentrators / cylinders and nursing support. Emoha will make full attempts at fulfilling the need, but will not be responsible for delays from third parties.</p></div><div class="row"><div class="col-sm-4"><div class="subs_selectplan"><p><em class="fa fa-rupee">&nbsp;</em>18,000.00/<strong class="planmonths">3 Months</strong></p><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H7c0w6kj4kq7Xe" async="">
                     <!--//--><![CDATA[// ><!--
                     //--><!]]>
                     </script><span class="razorpay-payment-button svelte-ohbfj8"><a href="https://razorpay.com/payment-button/pl_H7c0w6kj4kq7Xe/view/?utm_source=payment_button&amp;utm_medium=button&amp;utm_campaign=payment_button" type="submit" class="PaymentButton PaymentButton--dark PaymentButton--rzpTheme PaymentButton--rzp-dark-standard svelte-ekc7fv"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svelte-ekc7fv"><path d="M7.077 6.476l-.988 3.569 5.65-3.589-3.695 13.54 3.752.004 5.457-20L7.077 6.476z" fill="#fff" class="svelte-ekc7fv"></path><path d="M1.455 14.308L0 20h7.202L10.149 8.42l-8.694 5.887z" fill="#fff" class="svelte-ekc7fv"></path></svg> <div class="PaymentButton-contents svelte-ekc7fv"><span class="PaymentButton-text svelte-ekc7fv">Buy Now</span> <div class="PaymentButton-securedBy svelte-ekc7fv">Secured by Razorpay</div></div></a></span></form></div></div><div class="col-sm-4"><div class="subs_selectplan"><p><em class="fa fa-rupee">&nbsp;</em>36,000.00/<strong class="planmonths">6 Months</strong></p><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H7c2N9gkSriXmx" async="">
                     <!--//--><![CDATA[// ><!--
                     //--><!]]>
                     </script><span class="razorpay-payment-button svelte-ohbfj8"><a href="https://razorpay.com/payment-button/pl_H7c2N9gkSriXmx/view/?utm_source=payment_button&amp;utm_medium=button&amp;utm_campaign=payment_button" type="submit" class="PaymentButton PaymentButton--dark PaymentButton--rzpTheme PaymentButton--rzp-dark-standard svelte-ekc7fv"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svelte-ekc7fv"><path d="M7.077 6.476l-.988 3.569 5.65-3.589-3.695 13.54 3.752.004 5.457-20L7.077 6.476z" fill="#fff" class="svelte-ekc7fv"></path><path d="M1.455 14.308L0 20h7.202L10.149 8.42l-8.694 5.887z" fill="#fff" class="svelte-ekc7fv"></path></svg> <div class="PaymentButton-contents svelte-ekc7fv"><span class="PaymentButton-text svelte-ekc7fv">Buy Now</span> <div class="PaymentButton-securedBy svelte-ekc7fv">Secured by Razorpay</div></div></a></span></form></div></div><div class="col-sm-4"><div class="subs_selectplan"><p><em class="fa fa-rupee">&nbsp;</em>72,000.00/<strong class="planmonths">12 Months</strong></p><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H7c33V8oXAuPSL" async="">
                     <!--//--><![CDATA[// ><!--
                     //--><!]]>
                     </script><span class="razorpay-payment-button svelte-ohbfj8"><a href="https://razorpay.com/payment-button/pl_H7c33V8oXAuPSL/view/?utm_source=payment_button&amp;utm_medium=button&amp;utm_campaign=payment_button" type="submit" class="PaymentButton PaymentButton--dark PaymentButton--rzpTheme PaymentButton--rzp-dark-standard svelte-ekc7fv"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svelte-ekc7fv"><path d="M7.077 6.476l-.988 3.569 5.65-3.589-3.695 13.54 3.752.004 5.457-20L7.077 6.476z" fill="#fff" class="svelte-ekc7fv"></path><path d="M1.455 14.308L0 20h7.202L10.149 8.42l-8.694 5.887z" fill="#fff" class="svelte-ekc7fv"></path></svg> <div class="PaymentButton-contents svelte-ekc7fv"><span class="PaymentButton-text svelte-ekc7fv">Buy Now</span> <div class="PaymentButton-securedBy svelte-ekc7fv">Secured by Razorpay</div></div></a></span></form></div></div></div></div></div></div>               </div>
               <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                  <div class="row"><div class="col-sm-4"><div class="subs_left_img"><div class="subs_img_box"><img class="img-responsive" src="https://emoha.com/sites/default/files/mainwebsitebanner/ourplans/iStock-1180917233-min_1.webp"><div class="plans_btnbox"><ul><li><a href="https://emoha.com/shcform">Sign Up</a></li></ul></div></div></div></div><div class="col-sm-8"><div class="subs_plan_des_txt"><p>An add-on package to Empower or Assure, get access to professional nurses and attendants trained in elder care</p><ul><li>Care supervised by experienced Nurses</li><li>Assistance with management of chronic conditions like dementia, arthritis, hypertension</li><li>Assistance with medication management</li><li>Vital signs tracked &amp; monitored regularly</li><li>Personalized care plans monitored by a doctor</li></ul><div class="subs_plan_special"><p>*Customized to needs</p></div><div class="subs_small_txt"><p>Please note that currently there are severe delays in scheduling of lab tests, delivery and availability of medications and oxygen concentrators / cylinders and nursing support. Emoha will make full attempts at fulfilling the need, but will not be responsible for delays from third parties.</p></div></div></div></div>
               </div>

            </div>

         </div>

      </div>

   </section>
   <!-- Blog Area End -->
   <section  class="jobguru-blog-area ">
   <div class="container">
   <div class="col-md-12">
   <div class="column-inner bg-size-cover ">
   <div class="column-content-inner">
   <div class="column-content service-heading ">
   <div class="impect_new" style="position: relative;">
   <div class="home_bubble">
   <div class="bubble b_one">&nbsp;</div>
   <div class="bubble b_two">&nbsp;</div>
   <div class="bubble b_three">&nbsp;</div>
   <div class="bubble b_four">&nbsp;</div>
   <div class="bubble b_five">&nbsp;</div>
   <div class="bubble b_six">&nbsp;</div>
   <div class="bubble b_saven">&nbsp;</div>
   <div class="bubble b_eight">&nbsp;</div>
   <div class="bubble b_nine">&nbsp;</div>
   </div><div class="container">
   <div class="row">
   <div class="col-md-12">
   <div class="heading_section2021 wow fadeInDown animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
   <h2>Why Emoha?</h2>
   </div>
   </div>
   </div>
   <div class="row">
   <div class="col-md-2 col-sm-4 col-xs-6">
   <div class="cir_line leftlinehide wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
   <div class="circle1 cir_box_1">
   <div class="impect_icon"><img class="lazy img-responsive center-block" src="img/lives.webp" alt=""></div>
   <h3><span class="counter">150</span>+</h3>
   <h4>Lives Saved</h4>
   </div>
   </div>
   </div>
   <div class="col-md-2 col-sm-4 col-xs-6">
   <div class="cir_line2 wow zoomIn animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
   <div class="circle2 cir_box_2">
   <div class="impect_icon">
   <img class="lazy img-responsive center-block" src="img/vaccine-1.webp" alt="">
   </div>
   <h3><span class="counter">500</span>+</h3>
   <h4>Members COVID<br> Vaccinated</h4>
   </div>
   </div>
   </div>
   <div class="col-md-2 col-sm-4 col-xs-6">
   <div class="cir_line wow zoomIn animated" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
   <div class="circle1 cir_box_3">
   <div class="impect_icon">
   <img class="lazy img-responsive center-block" src="img/doc.webp" alt="">
   </div>
   <h3><span class="counter">500</span>+</h3>
   <h4>Doctors</h4>
   </div>
   </div>
   </div>
   <div class="col-md-2 col-sm-4 col-xs-6">
   <div class="cir_line2 wow zoomIn animated" data-wow-delay="0.7s" style="visibility: visible;-webkit-animation-delay: 0.7s; -moz-animation-delay: 0.7s; animation-delay: 0.7s;">
   <div class="circle2 cir_box_4">
   <div class="impect_icon">
   <img class="lazy img-responsive center-block" src="img/online2.webp" alt="">
   </div>
   <h3><span class="counter">800</span>+</h3>
   <h4>Online Activities<br> / Events</h4>
   </div>
   </div>
   </div>
   <div class="col-md-2 col-sm-4 col-xs-6">
   <div class="cir_line wow zoomIn animated" data-wow-delay="0.9s" style="visibility: visible;-webkit-animation-delay: 0.9s; -moz-animation-delay: 0.9s; animation-delay: 0.9s;">
   <div class="circle1 cir_box_5">
   <div class="impect_icon">
   <img class="lazy img-responsive center-block" src="img/call-center.webp" alt="">
   </div>
   <h3><span class="counter">25,000</span>+</h3>
   <h4>Care Calls</h4>
   </div>
   </div>
   </div>
   <div class="col-md-2 col-sm-4 col-xs-6">
   <div class="cir_line2 wow zoomIn animated" data-wow-delay="1.1s" style="visibility: visible;-webkit-animation-delay: 1.1s; -moz-animation-delay: 1.1s; animation-delay: 1.1s;">
   <div class="circle2 cir_box_6">
   <div class="impect_icon"><img class="lazy img-responsive center-block" src="img/elders.webp" alt=""></div>
   <h3><span class="counter">3500</span>+</h3><h4>Elders</h4></div></div></div></div></div></div></div></div></div>
   </div>
   </div>
   
   </section>

<section class="jobguru-blog-area">

<div class="row-wrapper clearfix">
<div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="column-inner bg-size-cover">
<div class="column-content-inner">
<div class="column-content service-heading ">
<div class="androindapp-section">
<div class="heading_section2021">
<h2>Get updates about your parents<br> With India’s first Elder App</h2>
</div>
<div class="appshap1">&nbsp;</div>
<div class="appshap2">&nbsp;</div>
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="row">
<div class="col-sm-6 col-xs-6">
<div class="app-box wow fadeInDown animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
<img class="img-responsive" src="{{ asset('frontend/img/app-image1.webp') }}">
</div>
</div>
<div class="col-sm-6 col-xs-6">
<div class="app-box wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
<img class="img-responsive" src="{{ asset('frontend/img/app-image2.webp') }}">
</div>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="appcontent">
<ul>
<li class="wow fadeInRight animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
<div>Emergency</div>
</li>
<li class="wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div>Virtual Activities</div>
</li>
<li class="wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
<div>Health Monitoring</div>
</li>
<li class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
<div>Electronic Health Records</div>
</li>
</ul>
</div>
</div></div></div></div></div></div></div></div>
</div>
</section>

<section class="jobguru-blog-area">
<div class="row-wrapper clearfix"><div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="column-inner bg-size-cover "><div class="column-content-inner"><div class="column-content service-heading "><div id="signupform" class="signup_section"><div class="rightshap">&nbsp;</div><div class="rightshap2">&nbsp;</div><div class="container"><div class="signupbox"><div class="row"><div class="col-md-4 col-md-offset-8 col-sm-5 col-sm-offset-7"><div class="sign_form_box"><div><div class="formheading"><h3>Become a part of India's<br> Largest Community of Elders</h3></div><form id="form" accept-charset="UTF-8" action="https://forms.zohopublic.com/emohaportal/form/HomePageBannerform/formperma/3wB5VZzfj6p5_3W93VFuyEgU8VlWeGXuY_rxX_xrg5o/htmlRecords/submit" enctype="multipart/form-data" method="POST" name="form"><div class="js-form-item"><p>Name</p><input id="edit-name" class="form-text " maxlength="255" name="SingleLine" required="" size="42" type="text" value="" placeholder="Name"></div><div class="js-form-item"><p>Email</p><input id="edit-email" class="form-email" maxlength="254" name="Email" required="" size="42" type="text" value="" placeholder="Email"></div><div class="js-form-item"><p>Mobile Number</p><input id="edit-phone-no" class="form-tel" maxlength="20" name="PhoneNumber_countrycode" required="" size="42" type="text" value="" placeholder="Phone No"></div><div id="edit-actions" class="form-actions"><button type="submit">Sign Up<br></button></div></form></div></div></div></div></div></div></div></div></div></div></div></div>
</section>

@endsection