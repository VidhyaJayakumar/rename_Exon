<?php include("admin/dbconnect.php");
      $sql = "SELECT * FROM config";
      $res = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($res);
  
 ?>
<!DOCTYPE html>
 <html class="" lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="circular-std-book-cufonfonts-webfont/style.css">
<link rel="shortcut icon" href="misc/favicon.png" type="misc/favicon.png" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title><?php echo $row['c_title']; ?></title>
    <meta charset="utf-8"/>
    <meta name="description" content="<?php echo $row['c_desc']; ?>"/>
    <meta name="keywords" content="<?php echo $row['c_keyword']; ?>"/>
  <meta property="og:image" content="http://www.exoncorp.com/logo.png" >    
                       <meta name="twitter:card" content="summary" />          
  <link rel="canonical" href="http://www.exoncorp.com/"/>
  <!--  <link rel="Css/Stylesheet" href="css/bootstrap.css"/>
  <link rel="Css/Stylesheet" href="css/bootstrap.min.css"/>
  <link rel="Css/Stylesheet" href="css/bootstrap-theme.css"/>
  <link rel="Css/Stylesheet" href="css/bootstrap-theme.min.css"/>-->
                <meta name="keywords" content="Spoken English training in vellore, Call center training in vellore, Handwriting training in vellore, Soft skill training in vellore, Spooken English Course in vellore, English Gramer training in vellore, Handwriting improvement training in vellore, Brain Development training in vellore, Coaching center in vellore, Communication Development center in vellore, Personality Development training in vellore, Presentaation skill Development training in vellore, Fluent English training in vellore, BPO training in vellore, UK voice process in vellore, Us voice process in vellore">
                <meta name="" />
                <meta property="og:site_name" content="exoncorp.com"/>
                <meta property="og:url" content="http://www.exoncorp.com/" >   
                <meta name="twitter:url" content="http://www.exoncorp.com/" >
                <meta name="twitter:site" content="@exoncorp"/>
                <meta name="twitter:title" content="Online and Classroom Training for Professional Certification Courses | Exincorp Academy" >
                <meta name="twitter:description" content="Exincorp provides online classes, classroom training and practice tests for PMP, PRINCE2, ITIL, CFA, FRM, Six Sigma, Cloud Computing, CISA, JAVA, Microsoft and more." >
                <meta name="twitter:image" content="http://www.Exincorp.com/logo.png" >
           
            <meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.profile.emails.read" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
               
            <script type="application/ld+json"> 
                {
                    "@context": "http://schema.org",
                    "@type": "Organization",
                    "url": "http://www.exoncorp.com",
                    "logo": "http://www.exoncorp.com/logo.png",
                    "legalName" : "Exincorp Pvt  Ltd.,",
                    "contactPoint" : [{
                        "@type" : "ContactPoint",
                        "telephone" : "+91-818-998-5559",
                        "contactType" : "Customer Service",
                        "contactOption" : "Contact" 
                    }],
                     "sameAs" : [ 
 "https://www.facebook.com/Exincorp/",
 "https://twitter.com/exoncorp",
 "https://plus.google.com/+Exincorp/",
    "https://www.pinterest.com/exoncorp",
    "http://youtube.com/exoncorp"
 ]
                }
            </script>    
             <!-- Meta tags : End -->
<meta name="Publisher" content="Exincorp (www.exoncorp.com)" />
    <meta name="revisit-after" content="1 days"/><meta name="googlebot" content="ALL" />

  <link type="text/css" rel="stylesheet" href="sites/default/files/css/css_UlpkXJSYOdebU9JVGf9y5B34PXaR4-_69TbYzDc4F4A.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_S_YhzSXNaDbjWZ88CeENHfwVW_dASOD-KHOPQ-3tOCo.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_opFmOflf70ENsEkIuFuzxcalK9OIW51LvhbNSVYLdyQ.css" media="all" />
<link type="text/css" rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_6Unf-_9W3J6l7Jp5t118AP499-qNriKBSY2IonNGS6I.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_spFz-UcoJpOsJWOzuotDh4iMHZlAg0Uyq1NhxCjXeKA.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/code.css" media="all" />

<script src="sites/default/files/js/js_LcFRnnSHVah-Aw_WQ8aVLXhp3HPJvrOe4h6YEXA5BT8.js"></script>
<script src="sites/default/files/js/js_4LQCp11tmOY-RVxTYC2hJK0BEgFGJZTSx4HEAJDhmDM.js"></script>
<script src="sites/default/files/js/js_eMkuZ7j2RUtw8s6jHKc2jnkZJyQfmvF5dsO4m1RQtS8.js"></script>
<script>jQuery.extend(Drupal.settings, {"basePath":"\/educar\/","pathPrefix":"","ajaxPageState":{"theme":"gavias_educar","theme_token":"bqQXAZpjWDTi9PeRj_lOpOHFQc-3PKBXSCEClSczKqk","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.7\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/webform\/js\/webform.js":1,"sites\/all\/modules\/tb_megamenu\/js\/tb-megamenu-frontend.js":1,"sites\/all\/modules\/tb_megamenu\/js\/tb-megamenu-touch.js":1,"sites\/all\/modules\/gavias\/gavias_slider\/vendor\/swiper\/js\/swiper.jquery.js":1,"sites\/all\/modules\/gavias\/gavias_slider\/vendor\/main.js":1,"sites\/all\/modules\/gavias\/widget\/js\/twitter\/twitter.js":1,"sites\/all\/modules\/gavias\/gavias_shortcodes\/inc\/js\/custom.js":1,"sites\/all\/modules\/gavias_themer\/vendor\/colorpicker\/js\/colorpicker.js":1,"sites\/all\/modules\/gavias_themer\/assets\/admin.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/owl-carousel\/owl.carousel.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/isotope.pkgd.min.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/masonry.pkgd.min.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/wow.min.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/jquery.appear.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/count-to.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/jquery.easypiechart.min.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/prettyphoto\/js\/jquery.prettyPhoto.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/jpreloader.min.js":1,"sites\/all\/themes\/gavias_educar\/vendor\/smoothscroll.js":1,"sites\/all\/themes\/gavias_educar\/js\/bootstrap.js":1,"sites\/all\/themes\/gavias_educar\/js\/imagesloader.min.js":1,"sites\/all\/themes\/gavias_educar\/js\/theme.plugins.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.messages.css":1,"sites\/all\/modules\/simplenews\/simplenews.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/poll\/poll.css":1,"modules\/search\/search.css":1,"modules\/forum\/forum.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/panels\/css\/panels.css":1,"sites\/all\/modules\/panels\/plugins\/layouts\/flexible\/flexible.css":1,"sites\/all\/modules\/webform\/css\/webform.css":1,"public:\/\/ctools\/css\/3240e9517afc9284c9df9c03ebdfd902.css":1,"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/font-awesome\/4.4.0\/css\/font-awesome.min.css":1,"sites\/all\/modules\/tb_megamenu\/css\/bootstrap.css":1,"sites\/all\/modules\/tb_megamenu\/css\/base.css":1,"sites\/all\/modules\/tb_megamenu\/css\/default.css":1,"sites\/all\/modules\/tb_megamenu\/css\/compatibility.css":1,"sites\/all\/modules\/gavias\/gavias_slider\/vendor\/swiper\/css\/swiper.css":1,"sites\/all\/themes\/gavias_educar\/css\/template.css":1,"sites\/all\/themes\/gavias_educar\/css\/bootstrap.css":1,"sites\/all\/modules\/gavias_themer\/vendor\/colorpicker\/css\/colorpicker.css":1,"sites\/all\/themes\/gavias_educar\/vendor\/owl-carousel\/owl.carousel.css":1,"sites\/all\/themes\/gavias_educar\/vendor\/owl-carousel\/owl.transitions.css":1,"sites\/all\/themes\/gavias_educar\/vendor\/prettyphoto\/css\/prettyPhoto.css":1,"sites\/all\/themes\/gavias_educar\/css\/font-awesome.css":1,"sites\/all\/themes\/gavias_educar\/css\/animate.css":1,"sites\/all\/themes\/gavias_educar\/css\/sliderlayer.css":1}},"urlIsAjaxTrusted":{"\/educar\/":true}});</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
   


    h2,h3{
      font-family: 'Circular Std Book', Helvetica, Arial, " sans-serif"!important;
    src: url('CircularStd-Book.eot');
    src: url('CircularStd-Book.eot?#iefix') format('embedded-opentype'),
        url('CircularStd-Book.woff') format('woff'),
        url('CircularStd-Book.ttf') format('truetype'),
        url('CircularStd-Book.svg#CircularStd-Book') format('svg'); 
    }


    



/*    span{
      font-family: 'Circular Std Book', Helvetica, Arial, " sans-serif"!important;
    src: url('CircularStd-Book.eot');
    src: url('CircularStd-Book.eot?#iefix') format('embedded-opentype'),
        url('CircularStd-Book.woff') format('woff'),
        url('CircularStd-Book.ttf') format('truetype'),
        url('CircularStd-Book.svg#CircularStd-Book') format('svg'); 

    }*/

  </style>
  <style type="text/css">
@font-face {
    font-family: "Maisonneue Book";
    src: url("MaisonNeue-Book.ttf") format("truetype");
}
body { 
    font-family: 'Maisonneue Book', sans-serif !important;
}
</style>
    
    </head>
    
    
    
    
<body class="html front not-logged-in no-sidebars page-home-edu-v1 page-no-margin not-preloader" >


  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <div class="gavias-main-page">
   
    
<?php include("header.php");?>

	<div role="main" class="main main-page main-page-panel">
		
					<div class="promotion area no-margin">
				<div class="area-inner">
					<div class="row">
													<div class="promotion-one col-xs-12">
								  <div class="region region-promotion">
    <div id="block-gavias-slider-gavias-slider-block-1" class="block block-gavias-slider no-margin no-title">
  <div class="block-inner clearfix">

    <div class="block-title">
                      </div> 
   
    <div class="block-content">
      <div>
        <div  style="min-height: 350px" class="gavias-slider swiper-container first-el-true" data-height="500" data-fullheight="false" data-pause="7000" dir="ltr">	
   <div class="swiper-wrapper">
   	<div class="swiper-slide center_center">
   <div class="gavias-slider-image slide" style="background-image: url('sites/default/files/slide-1.jpg');background-color: #ccc;"></div>
      <div class="gavias-slide-overlay"></div>      <div class="slider-content">
         <div class="container">
            <div class="tp-caption  caption-skin-white gavias-slide-bottom">

                                 <div class="caption-title" style="font-size:45px; font-weight:700; letter-spacing:0px; ">
                     Your Career in IT Starts Here !!             </div>
                 

                                 <div class="caption-description" style="">
                                        </div>
                

               <div class="slider-action">
                                       <a href="about.php  " class="btns btn-slide ">
                        About Us                    </a>
                   
                   
                                       <a href="contactus.php"  class="btns btn-slide btn-slide-flat">
                        Contact Us                     </a>
                    
               </div>
               
            </div>
      </div>   
   </div>   
</div><div class="swiper-slide left_center">
   <div class="gavias-slider-image slide" style="background-image: url('sites/default/files/slider-2.jpg');background-color: #ccc;"></div>
      <div class="gavias-slide-overlay"></div>      <div class="slider-content">
         <div class="container">
            <div class="tp-caption gavias-opacity caption-skin-white gavias-slide-bottom">

                                 <div class="caption-title" style="font-size:45px; font-weight:700; letter-spacing:0px; ">
                     Creating Global IT Professionals !               </div>
                 

                                 <div class="caption-description" style="">
                                        </div>
                

               <div class="slider-action">
                                       <a href="about.php" class="btns btn-slide btn-slide-flat">
                        About Us                     </a>
                   
                   
                                       <a href="contactus.php" class="btns btn-slide btn-slide-outline">
                        Contact Us                   </a>
                    
               </div>
               
            </div>
      </div>   
   </div>   
</div>



<div class="swiper-slide center_center">
   <div class="gavias-slider-image slide" style="background-image: url('sites/default/files/slider-3.jpg');background-color: #ccc;"></div>
      <div class="gavias-slide-overlay"></div>      <div class="slider-content">
         <div class="container">
            <div class="tp-caption gavias-opacity caption-skin-custom gavias-scale-down">

                                 <div class="caption-title" style="font-size:45px; font-weight:700; letter-spacing:0px; color:#FFF">
                    Get Trained | Get Certified !!             </div>
                 

                                 <div class="caption-description" style="color:#FFF">
                                        </div>
                

               <div class="slider-action">
                                       <a href="about.php" class="btns btn-slide ">
                        About Us                     </a>
                   
                   
                                       <a href="contactus.php" class="btns btn-slide btn-slide-flat">
                        Contact Us                    </a>
                    
               </div>
               
            </div>
      </div>   
   </div>   
</div>   </div>	
    <!-- Add Pagination -->
     <div class="swiper-pagination"></div>
     <!-- Add Arrows -->
     <div class="swiper-button-next"></div>
     <div class="swiper-button-prev"></div>
     <div class="gavias-slider-loading"><div class="gavias-preloader"></div></div>
</div>

       </div>
    </div>  
  </div>
</div>
  </div>
	
							</div>
											</div>
				</div>	
			</div>
      <section class="ls section_padding_top_20 section_padding_bottom_10 top_offset_content hidden-xs hidden-sm">
        <div class="container">
          <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" style="position: relative; height: 490.594px;">
            <div class="isotope-item col-lg-4 col-md-6 col-sm-6" style="position: absolute; left: 0%; top: 0px;">
              <div class="with_padding rounded overflow_hidden main_bg_color2 after_cover with_radial_highlight hoverable-banner">
                <h4 class="text-uppercase semibold">
                  <span class="number">01</span>
                  what you get?
                </h4>
                <p class="bottommargin_25">
            Get Certified. Get Ahead.Helping people grow their careers. Every day!Achieve your career goal with industry recognised learning paths
          </p>
                <ol class="text-uppercase bold list3 bottommargin_0">
                  <li>Learn from the experts</li>
                  <li>Guaranteed career growth</li>
                  <li>
Accredited curriculum</li>
                  <li>Approved by global
 bodies</li>
                  <li>industry recognised learn</li>
                  <li>Learn on the go</li>
                </ol>
                <div class="media-links">
                  <a href="#" class="abs-link"></a>
                </div>
              </div>
            </div>
            <div class="isotope-item col-lg-4 col-md-6 col-sm-6" style="position: absolute; left: 33.3333%; top: 0px;">
              <div class="with_padding rounded overflow_hidden main_bg_color3 after_cover with_radial_highlight hoverable-banner with_image">
                <div class="bg_teaser" style="background-image: url('images/banner1.png');">
                  <img src="images/banner1.png" alt="">
                </div>
                <h4 class="text-uppercase semibold topmargin_0">
                  <span class="number">02</span>
                  Group Seminars
                </h4>
                <p>
            Join the Great Discussion forum and seminars with Our Expertise and Strenghten up your career
          </p>
                <div class="media-links">
                  <a href="#" class="abs-link"></a>
                </div>
              </div>
            </div>
            <div class="isotope-item col-lg-4 col-md-6 col-sm-6" style="position: absolute; left: 66.6667%; top: 0px;">
              <div class="with_padding rounded overflow_hidden main_bg_color after_cover with_radial_highlight hoverable-banner with_image">
                <div class="bg_teaser" style="background-image: url('images/banner2.png');">
                  <img src="images/banner2.png" alt="">
                </div>
                <h4 class="text-uppercase semibold topmargin_0">
                  <span class="number">03</span>
                  Large library
                </h4>
                <p>
            Our Large Library Facility will make you to Read more and Learn more 
          </p>
                <div class="media-links">
                  <a href="#" class="abs-link"></a>
                </div>
              </div>
            </div>
            <div class="isotope-item col-lg-4 col-md-6 col-sm-6" style="position: absolute; left: 33.3333%; top: 245px;">
              <div class="with_padding rounded overflow_hidden main_bg_color3 after_cover with_radial_highlight hoverable-banner with_image">
                <div class="bg_teaser" style="background-image: url('images/banner3.png');">
                  <img src="images/banner3.png" alt="">
                </div>
                <h4 class="text-uppercase semibold topmargin_0">
                  <span class="number">04</span>
                  Trending
                  <br> courses
                </h4>
                <p>
            Get the courses that makes you Trendy with the Technology
          </p>
                <div class="media-links">
                  <a href="#" class="abs-link"></a>
                </div>
              </div>
            </div>
            <div class="isotope-item col-lg-4 col-md-6 col-sm-6" style="position: absolute; left: 66.6667%; top: 245px;">
              <div class="with_padding rounded overflow_hidden main_bg_color4 after_cover with_radial_highlight hoverable-banner with_image">
                <div class="bg_teaser" style="background-image: url('images/banner4.png');">
                  <img src="images/banner4.png" alt="">
                </div>
                <h4 class="text-uppercase semibold topmargin_0">
                  <span class="number">05</span>
                  Free online
                  <br> courses
                </h4>
                <p>
            Learn on the go,
Access your courses anywhere, anytime & prepare with practice tests
          </p>
                <div class="media-links">
                  <a href="#" class="abs-link"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

		
		
		<div id="content" class="content content-full">
								<div class="content-main-inner">
					<div class="row">
						<div id="page-main-content" class="no-padding main-content col-md-12">
						
							<div class="main-content-inner">
								<div class="container">
																																			</div>

																	<div class="content-main">
										  <div class="region region-content">
    <div id="block-system-main" class="block block-system no-title">
  <div class="block-inner clearfix">

    <div class="block-title">
                      </div> 
   
    <div class="block-content">
      <div>
        <div class="panel-flexible panels-flexible-4 clearfix" >
<div class="panel-flexible-inside panels-flexible-4-inside">
<div class="panels-flexible-region panels-flexible-region-4-region_left panels-flexible-region-first panels-flexible-region-last ">
  <div class="inside panels-flexible-region-inside panels-flexible-region-4-region_left-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
<div  class="panels-container " ><div class="panels-inner"><div class="container">        <div class="block  panel-pane pane-block pane-views-service-block pane-views"  >
      
                  
      
      <div class="pane-content">
        <div class="view view-service view-id-service view-display-id-block view-dom-id-cd9888a7ba0b91d8a29fdc77131442e8">
        
  
  
      <div class="view-content">
      <div class="views-view-grid cols-3">
	
	
	
	
      <div class="views-row row row-1 row-first row-last clearfix">
              	
          <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-1 col-first">		
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-3.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="pro-hardware.php"> Hardware </a>
     </div>
    <div class="service-body text-center">
           <p align="Center">solution for an it driven world where quality is measured by your satisfaction and success</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
                      	
          <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-2">		
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-2.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="networking.php"> Network</a>
     </div>
    <div class="service-body text-center">
           <p align="center">Intensive trainings with real time experience Experienced instructors with global certifications</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
                      	
          <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-3 col-last">		
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-1.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="pro-server.php"> Server</a>
     </div>
    <div class="service-body text-center">
           <p align="center">we are leading global technology and services company offering innovative services.</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
           <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-1 col-first">    
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-5.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="pro-security.php"> Security </a>
     </div>
    <div class="service-body text-center">
           <p align="center">offering various types of security services which helped IT professionals to improve knowledge.</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
                  </div>

                   <!--<div class="views-row row row-1 row-first row-last clearfix">
                
          <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-1 col-first">   
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-3.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="pro-hardware.php"> Hardware </a>
     </div>
    <div class="service-body text-center">
           <p>solution for an it driven world where quality is measured by your satisfaction and success</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
                        
          <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-2">   
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-2.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="networking.php"> Network</a>
     </div>
    <div class="service-body text-center">
           <p>Intensive trainings with real time experience Experienced instructors with global certifications</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
                        
          <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-3 col-last">    
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-1.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="server.php"> Server</a>
     </div>
    <div class="service-body text-center">
           <p>we are leading global technology and services company offering innovative services.</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
           <div class="grid col-lg-3 col-md-3 col-sm-3 col-xs-12 col-1 col-first">    
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="serivce-block v1">
    <div class="image text-center">
             <img typeof="foaf:Image" src="sites/default/files/icon-service-5.png" width="48" height="48" alt="" />
    </div> 
    <div class="service-title text-center">
           <a href="pro-security.php"> Security </a>
     </div>
    <div class="service-body text-center">
           <p>offering various types of security services which helped IT professionals to improve knowledge in IT domain.</p>

     </div>      
</div>
</div>  </div>            </div>
          </div>
                  </div>-->
  </div>
    </div>
  
  
  
  
  
  
</div>      </div>

      
          </div>
    
 </div></div></div><div class="panel-separator"></div>

  <div  class="panels-container " style="background: #f5f5f5; ">


<div class="panels-inner"><div class="container">        <div class="block  panel-pane pane-block pane-views-course-courses-carousel pane-views"  >
      
                   <div class="block-title">
          <h2 class="pane-title">
            <span>Masters program</span>
          </h2>
        </div>
        <div class="pane-content">
        <div class="view view-course view-id-course view-display-id-courses_grid view-dom-id-e0c7ebb064e74b39795b20f3587d411b">
            <div class="view-header">
      <div class="block-description">Achieve your Career Goal with Industry recognised Learning Paths.
           <BR> Helping people grow their careers. 
           <BR> Every day!</div>
    </div>
            
      
      <div class="pane-content">
        <div class="view view-course view-id-course view-display-id-courses_carousel view-dom-id-1f14d004c3f9da410bc76be13c52f3e0">
        
  
  
      <div class="view-content">
      <div class="row">
   <div class="owl-carousel main-slideshow control-top" data-plugin-options='{"items": 3, "autoHeight": false, "singleItem":false}'>
               <div class="course-item grid clearfix col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/security.jpg" width="700" height="525" alt="" /></div>           <!-- <div class="price">52.00 $/Month</div>-->
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="security.php">Security</a></span>         </div>  
         <div class="teacher"> 
                </div>
         <div class="body">        
            <div class="field-content"><p>Updating your skill in latest technologies get trained from industry experts we help you to...</p></div>         </div>
         <div class="readmore">        
            <a href="security.php">View more</a>
         </div>
      </div>
   </div>
</div>  
               <div class="course-item grid clearfix col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/server.jpg" width="700" height="525" alt="" /></div>           <!-- <div class="price">30.00 $/Month</div>-->
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="pro-server.php">Server</a></span>         </div>  
         <div class="teacher"> 
                    </div>
         <div class="body">        
            <div class="field-content"><p>we are leading global technology and services company offering innovative services.</p></div>         </div>
         <div class="readmore">        
            <a href="pro-server.php">View more</a>
         </div>
      </div>
   </div>
</div>  
               <div class="course-item grid clearfix col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/network-engineer.jpg" width="700" height="525" alt="" /></div>            <!--<div class="price">100.00 $/Month</div>-->
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="networking.php">Network</a></span>         </div>  
         <div class="teacher"> 
               </div>
         <div class="body">        
            <div class="field-content"><p>Intensive trainings with real time experience with the Experienced instructors in a world class training</p></div>         </div>
         <div class="readmore">        
            <a href="networking.php">View more</a>
         </div>
      </div>
   </div>
</div>  
               <div class="course-item grid clearfix col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/web-design.jpg" width="700" height="525" alt="" /></div>            <!--<div class="price">45.00 $/Month</div>-->
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="web-design-training.php">Web Designing</a></span>         </div>  
         <div class="teacher"> 
                 </div>
         <div class="body">        
            <div class="field-content"><p>Designing a website is all about creating web pages for running online businesses.</p></div>         </div>
         <div class="readmore">        
            <a href="web-design-training.php">View more</a>
         </div>
      </div>
   </div>
</div>  
               <div class="course-item grid clearfix col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/digital.jpg" width="700" height="525" alt="" /></div>            <!--<div class="price">230.00 $/Month</div>-->
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="digital-marketing-training.php">Digital Marketing</a></span>         </div>  
         <div class="teacher"> 
                 </div>
         <div class="body">        
            <div class="field-content"><p>Digital Marketing Certified Associate (DMCA) is designed to ensure that you are..</p></div>         </div>
         <div class="readmore">        
            <a href="digital-marketing-training.php">View more</a>
         </div>
      </div>
   </div>
</div>  


 <div class="course-item grid clearfix col-xs-12">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/web-developer.jpg" width="700" height="525" alt="" /></div>          <!--  <div class="price">230.00 $/Month</div>-->
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="web-development-training.php">Web Development</a></span>         </div>  
         <div class="teacher"> 
             </div>
         <div class="body">        
            <div class="field-content"><p>Web is the future! Websites have now become an important tool for a business.</p></div>         </div>
         <div class="readmore">        
            <a href="web-development-training.php">View more</a>
         </div>
      </div>
   </div>
</div>  



         </div>
</div>
    </div>
  
  
  
  
  
  
</div>      </div>

      
          </div>
    
 </div></div>






  <!--<div class="panels-inner"><div class="container">        <div class="block  panel-pane pane-block pane-views-course-courses-grid pane-views"  >
      
                    <div class="block-title">
          <h2 class="pane-title">
            <span>Masters program</span>
          </h2>
        </div>
            
      
      <div class="pane-content">
        <div class="view view-course view-id-course view-display-id-courses_grid view-dom-id-e0c7ebb064e74b39795b20f3587d411b">
            <div class="view-header">
      <div class="block-description">Achieve your career goal with industry recognised learning paths.Helping people grow their careers. Every day!</div>
    </div>
  
  
  
      <div class="view-content">
      <div >
        <div class="row margin-bottom-30">         <div class="col-md-4 col-xs-12">
              <div class="course-item grid clearfix">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/security.jpg" width="700" height="525" alt="" /></div>            <div class="price">Security</div>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="security.php">Security</a></span>         </div>  
         <div class="teacher"> 
            <div class="field-content"><a href="content/cindy-chow.php">Roshan Kumar</a></div>         </div>
         <div class="body">        
            <div class="field-content"><p>Updating your skill in latest technologies get trained from industry experts we help you to...</p></div>         </div>
         <div class="readmore">        
            <a href="security.php">View more</a>
         </div>
      </div>
   </div>
</div>  
         </div>
         
                 <div class="col-md-4 col-xs-12">
              <div class="course-item grid clearfix">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/server.jpg" width="700" height="525" alt="" /></div>            <div class="price">Server</div>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="pro-server.php">Server</a></span>         </div>  
         <div class="teacher"> 
            <div class="field-content"><a href="content/leonardo-bonucci.php">Selvarathinam</a></div>         </div>
         <div class="body">        
            <div class="field-content"><p>we are leading global technology and services company offering innovative services.</p></div>         </div>
         <div class="readmore">        
            <a href="pro-server.php">View more</a>
         </div>
      </div>
   </div>
</div>  
         </div>
         
                 <div class="col-md-4 col-xs-12">
              <div class="course-item grid clearfix">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/network-engineer.jpg" width="700" height="525" alt="" /></div>            <div class="price">Network</div>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="networking.php">Network</a></span>         </div>  
         <div class="teacher"> 
            <div class="field-content"><a href="content/peter-parker.php">Siva Priya</a></div>         </div>
         <div class="body">        
            <div class="field-content"><p>Intensive trainings with real time experience Experienced instructors.</p></div>         </div>
         <div class="readmore">        
            <a href="networking.php">View more</a>
         </div>
      </div>
   </div>
</div>  
         </div>
      </div>   
        <div class="row margin-bottom-30">         <div class="col-md-4 col-xs-12">
              <div class="course-item grid clearfix">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/web-design.jpg" width="700" height="525" alt="" /></div>            <div class="price">Web Designing</div>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="web-design-training.php">Web Designing</a></span>         </div>  
         <div class="teacher"> 
            <div class="field-content"><a href="content/rebeca-adams.php">Rex Naveen Kumar</a></div>         </div>
         <div class="body">        
            <div class="field-content"><p>Designing a website is all about creating web pages for running online businesses.</p></div>         </div>
         <div class="readmore">        
            <a href="web-design-training.php">View more</a>
         </div>
      </div>
   </div>
</div>  
         </div>
         
                 <div class="col-md-4 col-xs-12">
              <div class="course-item grid clearfix">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/digital.jpg" width="700" height="525" alt="" /></div>            <div class="price">Digital Marketing</div>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="digital-marketing-training.php">Digital Marketing</a></span>         </div>  
         <div class="teacher"> 
            <div class="field-content"><a href="content/sarah-johnson.php">Imay</a></div>         </div>
         <div class="body">        
            <div class="field-content"><p>Digital Marketing Certified Associate (DMCA) is designed to ensure that you are a complete Digital Marketer.</p></div>         </div>
         <div class="readmore">        
            <a href="digital-marketing-training.php">View more</a>
         </div>
      </div>
   </div>
</div>  
         </div>
         
                 <div class="col-md-4 col-xs-12">
              <div class="course-item grid clearfix">      
   <div class="grid-inner col-inner">
      <div class="image">  
            <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/web-developer.jpg" width="700" height="525" alt="" /></div>            <div class="price">Web Development</div>
      </div>  
      <div class="item-body">
         <div class="title"> 
            <span class="field-content"><a href="web-development-training.php">Web Development</a></span>         </div>  
         <div class="teacher"> 
            <div class="field-content"><a href="content/peter-parker.php">Basha</a></div>         </div>
         <div class="body">        
            <div class="field-content"><p>Web is the future! Websites have now become an important tool for a business.</p></div>         </div>
         <div class="readmore">        
            <a href="web-development-training.php">View more</a>
         </div>
      </div>
   </div>
</div>  
         </div>
      </div>   
  </div> 
    </div>  
  
  
  
  
  
  
</div>      </div>

      
          </div>
    
 </div></div>--></div>

 <div class="panel-separator"></div>  
 

   
<div class="panel-separator"></div><div  class="panels-container  background-fixed" style="background: url('sites/default/files/bg-v2.jpg') no-repeat left top fixed; "><div class="panels-inner"><div class="container">        <div class="block  panel-pane pane-custom pane-1 widget-white"  >
      
                    <div class="block-title">
          <h2 class="pane-title">
            <span>Alumni speak</span>
          </h2>
        </div>
            
      
      <div class="pane-content">
        <div class="block-description">Helping people grow their careers. Every day!..</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="milestone-block white">
<div class="milestone-icon"><i class="fa fa-dashboard"></i></div>
<div class="milestone-right">
<div class="milestone-number">150000+</div>
<div class="milestone-text">Trained Students</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="milestone-block white">
<div class="milestone-icon"><i class="fa fa-comments"></i></div>
<div class="milestone-right">
<div class="milestone-number">126999+</div>
<div class="milestone-text">Placed Students</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="milestone-block white">
<div class="milestone-icon"><i class="fa fa-envelope"></i></div>
<div class="milestone-right">
<div class="milestone-number">10</div>
<div class="milestone-text">Years in IT Industry</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="milestone-block white">
<div class="milestone-icon"><i class="fa fa-thumbs-up"></i></div>
<div class="milestone-right">
<div class="milestone-number">17</div>
<div class="milestone-text">Global Partners</div>
</div>
</div>
</div>
</div>
      </div>

      
          </div>
    
 </div></div></div><div class="panel-separator"></div>  <div class="panels-container"><div class="panels-inner">
    <div class="container">    <div class="block  panel-pane pane-block pane-views-gallery-gallery-v1 pane-views"  >
      
                    <div class="block-title">
          <h2 class="pane-title">
            <span>Our Students Placed</span>
          </h2>
        </div>
            
      
      <div class="pane-content">
        <div class="view view-gallery view-id-gallery view-display-id-gallery_v1 view-dom-id-c0c66b109e7429e275919d9752c80582">
            <div class="view-header">
      <div class="block-description">We train our students as per Industry requirements and place them in different companies in India and Abroad as Networking ,Server Engineers.</div>
    </div>
  
  
  
      <div class="view-content">
      <div class="owl-carousel main-slideshow control-top view-gallery" data-plugin-options='{"items": 2, "autoHeight": true, "singleItem":false}'>
                                                        <div class="gallery-large carousel-item">
                        <div class="item content">  
          <a href="content/duis-molestie-volutpat.php"><img typeof="foaf:Image" src="images\ibm1.jpg" width="1170" height="658" alt="cmc limited" /></a>    
          <div class="description">
     <div class="xcolor"><a href="images\ibm1.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/duis-molestie-volutpat.php">Duis molestie volutpat</a></div> -->
</div>
  </div>
                    </div>
                                                                <div>                                           <div class="gallery-small carousel-item">
                                            <div class="item content gallery-small-item">  
          <a href="content/fusce-iaculis-purus-vitae.php"><img typeof="foaf:Image" src="images\hcl1.jpg" width="1170" height="658" alt="hcl" /></a>    
          <div class="description">
     <div class="xcolor"><a href="images\hcl1.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/fusce-iaculis-purus-vitae.php">Fusce iaculis purus vitae</a></div> -->
</div>
  </div>
                                                                                                                                                    <div class="item content gallery-small-item">  
          <a href="content/aliquam-faucibus-mliquam-0.php"><img typeof="foaf:Image" src="exoncorp.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="exoncorp.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/aliquam-faucibus-mliquam-0.php">Aliquam faucibus mliquam</a></div> -->
</div>
  </div>
                                            </div>
                                                                                                                                                   <div class="gallery-small carousel-item">
                                            <div class="item content gallery-small-item">  
          <a href="content/aliquam-faucibus-mliquam-faucibus.php"><img typeof="foaf:Image" src="images/tcs-consultancy.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="images/tcs-consultancy.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/aliquam-faucibus-mliquam-faucibus.php">Aliquam faucibus mliquam faucibus</a></div> -->
</div>
  </div>
                                                                                                                                                    <div class="item content gallery-small-item">  
          <a href="content/lacus-sodales-vestibulum.php"><img typeof="foaf:Image" src="images/hp1.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="images/hp1.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/lacus-sodales-vestibulum.php"> Lacus sodales vestibulum</a></div>  -->
</div>
  </div>
                                            </div>
                                        </div>                               
        
                                                    <div class="gallery-large carousel-item">
                        <div class="item content">  
          <a href="content/aliquam-faucibus-mliquam.php"><img typeof="foaf:Image" src="sites/default/files/exl.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="sites/default/files/exl.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/aliquam-faucibus-mliquam.php">Aliquam faucibus mliquam</a></div>  -->
</div>
  </div>
                    </div>
                                                                <div>                                           <div class="gallery-small carousel-item">
                                            <div class="item content gallery-small-item">  
          <a href="content/lorem-ipsum-dolor-0.php"><img typeof="foaf:Image" src="sites/default/files/tata.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="sites/default/files/tata.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/lorem-ipsum-dolor-0.php">Lorem ipsum dolor</a></div> -->
</div>
  </div>
                                                                                                                                                    <div class="item content gallery-small-item">  
          <a href="content/curabitur-ut-elit-lacus.php"><img typeof="foaf:Image" src="sites/default/files/microsoft.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="sites/default/files/microsoft.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/curabitur-ut-elit-lacus.php">Curabitur ut elit in lacus</a></div>  -->
</div>
  </div>
                                            </div>
                                                                                                                                                   <div class="gallery-small carousel-item">
                                            <div class="item content gallery-small-item">  
          <a href="content/etiam-ullamcorper-auctor.php"><img typeof="foaf:Image" src="sites/default/files/essar.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="sites/default/files/essar.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/etiam-ullamcorper-auctor.php">Etiam ullamcorper auctor</a></div> -->
</div>
  </div>
                                                                                                                                                    <div class="item content gallery-small-item">  
          <a href="content/morbi-ac-neque.php"><img typeof="foaf:Image" src="sites/default/files/citigroup.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="sites/default/files/citigroup.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/morbi-ac-neque.php"> Morbi ac neque</a></div> -->
</div>
  </div>
                                            </div>
                                        </div>                               
        
                                                    <div class="gallery-large carousel-item">
                        <div class="item content">  
          <a href="content/lorem-ipsum-dolor.php"><img typeof="foaf:Image" src="sites/default/files/infosys.jpg" width="1170" height="658" alt="" /></a>    
          <div class="description">
     <div class="xcolor"><a href="sites/default/files/infosys.jpg" data-rel="prettyPhoto[g_gal]"><i class="fa fa-search-plus">&nbsp;</i></a></div>
    <!-- <div class="body"><a href="content/lorem-ipsum-dolor.php">Lorem ipsum dolor</a></div> -->
</div>
  </div>
                    </div>
                               
        
    </div>


    </div>
  
  
  
  
  
  
</div>      </div>

      
          </div>
  </div>  
   </div></div>
<div class="panel-separator"></div><div  class="panels-container  background-fixed" style="background: url('sites/default/files/bg-portfolio-v3.png') repeat left top fixed; "><div class="panels-inner"><div class="container">        <div class="block  panel-pane pane-block pane-views-testimonials-testimonials-v2 margin-bottom-0 pane-views"  >
      
                    <div class="block-title">
          <h2 class="pane-title">
            <span>What Student Say?</span>
          </h2>
        </div>
            
      
      <div class="pane-content">
        <div class="view view-testimonials view-id-testimonials view-display-id-testimonials_v2 view-dom-id-761e9a3a4776f39f1b61ff5ab8b6db44">
        
  
  
      <div class="view-content">
      <div class="view-testimonial-block row">
   <div class="owl-carousel push-bottom view-testimonial control-top" data-plugin-options='{"items": 1, "autoHeight": true, "singleItem": true}'>
               <div class="testimonial-item testimonial-v2">
            <div class="content-inner">
                 
  <div class="views-field views-field-body">        <div class="field-content"><p> It was my Pleasure to take up this course. The Course was competed in the specified time. Well trained faculties provide excellent coaching I enjoyed my course Center is organized very well.</p>
</div>  </div>  
  <div class="views-field views-field-field-testimonial-image">        <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/testimonial-4.jpg" width="86" height="86" alt="" /></div>  </div>  
  <div class="views-field views-field-field-testimonial-name">        <div class="field-content">Arun Kumar A</div>  </div>  
  <div class="views-field views-field-field-testimonial-job">        <div class="field-content">CCNA Student</div>  </div>            </div>
         </div>   
               <div class="testimonial-item testimonial-v2">
            <div class="content-inner">
                 
  <div class="views-field views-field-body">        <div class="field-content"><p>It was good experience and learns new things. Arul taught really well in class, discipline class, it was more pleasure to attend the class in Evening 6 to 8. And lab classes are really good.</p>
</div>  </div>  
  <div class="views-field views-field-field-testimonial-image">        <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/testimonial-3.jpg" width="86" height="86" alt="" /></div>  </div>  
  <div class="views-field views-field-field-testimonial-name">        <div class="field-content">Arularasi</div>  </div>  
  <div class="views-field views-field-field-testimonial-job">        <div class="field-content">CCNA Student</div>  </div>            </div>
         </div>   
               <div class="testimonial-item testimonial-v2">
            <div class="content-inner">
                 
  <div class="views-field views-field-body">        <div class="field-content"><p>I would like to declare my thanks for your honorable conducting and co-operations. It was such a great pleasure to join with us to complete this session. Hope this appearance would be a precious stream line for my career ways.</p>
</div>  </div>  
  <div class="views-field views-field-field-testimonial-image">        <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/testimonial-2.jpg" width="86" height="86" alt="" /></div>  </div>  
  <div class="views-field views-field-field-testimonial-name">        <div class="field-content">Rajesh</div>  </div>  
  <div class="views-field views-field-field-testimonial-job">        <div class="field-content">Ethical Hacking Student 2016 Batch</div>  </div>            </div>
         </div>   
               <div class="testimonial-item testimonial-v2">
            <div class="content-inner">
                 
  <div class="views-field views-field-body">        <div class="field-content"><p> It was my Pleasure to take up this course. The Course was competed in the specified time. Well trained faculties provide excellent coaching I enjoyed my course Center is organized very well.</p>
</div>  </div>  
  <div class="views-field views-field-field-testimonial-image">        <div class="field-content"><img typeof="foaf:Image" src="sites/default/files/testimonial-1.jpg" width="86" height="86" alt="" /></div>  </div>  
  <div class="views-field views-field-field-testimonial-name">        <div class="field-content">Ganesh</div>  </div>  
  <div class="views-field views-field-field-testimonial-job">        <div class="field-content">Web Designing Student</div>  </div>            </div>
         </div>   
         </div>
</div>   
    </div>
  
  
  
  
  
  
</div>      </div>

      
          </div>
    
 </div></div></div><div class="panel-separator"></div>  <div class="panels-container"><div class="panels-inner">
    <div class="container">    <div class="block  panel-pane pane-block pane-views-post-block-2 pane-views"  >
      
                    <div class="block-title">
          <h2 class="pane-title">
            <span>Recent News/Events</span>
          </h2>
        </div>
            
      
      <div class="pane-content">
        <div class="view view-post view-id-post view-display-id-block_2 view-home-blog-v2 view-dom-id-c1e6aacea7a5eaf301c47cbae9a2b2ba">
            <div class="view-header">
      <div class="block-description"></div>
    </div>
  
  
  
      <div class="view-content">
      <div class="views-view-grid cols-3">
	
	
	
	
      <div class="views-row row  clearfix">
              	
          <div class="grid col-lg-4 col-md-4 col-sm-4 col-xs-12 ">		
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="post-home">
    <div class="entry-thumbnail text-center"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/post-8dc69.jpg?itok=9Z9gjMXC" width="700" height="525" alt="" /> </div>
    <div class="meta">
           <div class="entry-date">Aug 17,2017 / 3 comments</div>
           <div class="entry-title"><h3><!--<a href="#">-->Exam Results</a></h3></div>
          <div class="entry-body"><p>Exam Result Published For 2017</p></div>
          <div class="readmore"><a href="#">Read more</a></div>
     </div>
</div></div>  </div>            </div>
          </div>
                      	
          <div class="grid col-lg-4 col-md-4 col-sm-4 col-xs-12 ">		
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="post-home">
    <div class="entry-thumbnail text-center"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/post-19_09a26.jpg?itok=dzuKp159" width="700" height="525" alt="" /> </div>
    <div class="meta">
           <div class="entry-date">Apr 12,2017 / 0 comments</div>
           <div class="entry-title"><h3><!--<a href="#">-->Ethical Hacking Training</a></h3></div>
          <div class="entry-body"><p>Ethical Hacking and Cyber Security Training</p></div>
          <div class="readmore"><a href="#">Read more</a></div>
     </div>
</div></div>  </div>            </div>
          </div>
                      	
          <div class="grid col-lg-4 col-md-4 col-sm-4 col-xs-12 ">		
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-nothing">        <div class="field-content"><div class="post-home">
    <div class="entry-thumbnail text-center"><img typeof="foaf:Image" src="sites/default/files/styles/medium/public/post-28078.jpg?itok=VlFTcwK7" width="700" height="525" alt="" /> </div>
    <div class="meta">
           <div class="entry-date">June 12,2017 / 0 comments</div>
           <div class="entry-title"><h3><!--<a href="#">-->Training and Certification</a></h3></div>
          <div class="entry-body"><p>Internet of Things certification and training </p></div>
          <div class="readmore"><a href="#">Read more</a></div>
     </div>
</div></div>  </div>            </div>
          </div>
                  </div>
  </div>
    </div>
  
  
  
  
  
  
</div>      </div>

      
          </div>
  </div>  
   </div></div>
<div class="panel-separator"></div><div  class="panels-container  background-fixed" style="background: url('sites/default/files/bg-touch-get.jpg') no-repeat left top fixed; "><div class="panels-inner"><div class="container">        <div class="block  panel-pane pane-block pane-webform-client-block-112 contact-form widget-white margin-bottom-0 pane-webform"  >
      
                    <div class="block-title">
          <h2 class="pane-title">
            <span>Get in touch today !</span>
          </h2>
        </div>
            
      
      <div class="pane-content">
        <form class="webform-client-form webform-client-form-112" enctype="multipart/form-data" action="mail1.php" method="post" id="webform-client-form-112" accept-charset="UTF-8"><div><div  class="form-item webform-component webform-component-email webform-component--your-email">
  <label class="element-invisible" for="edit-submitted-your-email">Your email <span class="form-required" title="This field is required.">*</span></label>
 <input required="required" class="email form-text form-email required" placeholder="Your email" type="email" id="edit-submitted-your-email" name="submitted[your_email]" size="60" />
</div>
<div  class="form-item webform-component webform-component-textfield webform-component--your-name">
  <label class="element-invisible" for="edit-submitted-your-name">Your name <span class="form-required" title="This field is required.">*</span></label>
 <input required="required" placeholder="Your name" type="text" id="edit-submitted-your-name" name="submitted[your_name]" value="" size="60" maxlength="128" class="form-text required" />
</div>
<div  class="form-item webform-component webform-component-textarea webform-component--your-message">
  <label class="element-invisible" for="edit-submitted-your-message">Your message </label>
 <div class="form-textarea-wrapper"><textarea placeholder="Your massage" id="edit-submitted-your-message" name="submitted[your_message]" cols="60" rows="5" class="form-textarea"></textarea></div>
</div>
<input type="hidden" name="details[sid]" />
<input type="hidden" name="details[page_num]" value="1" />
<input type="hidden" name="details[page_count]" value="1" />
<input type="hidden" name="details[finished]" value="0" />
<input type="hidden" name="form_build_id" value="form-fSSzkZ8rVb2tT9I6MDmUJ-mcg-4tR3U8UepCvBqU2m0" />
<input type="hidden" name="form_id" value="webform_client_form_112" />
<div class="form-actions"><input class="webform-submit button-primary btn-primary btn form-submit" type="submit" name="op" value="SEND MESSAGE" /></div></div></form>      </div>

      
          </div>
    
 </div></div></div>  </div>
</div>
</div>
</div>
      </div>
    </div>  
  </div>
</div>
  </div>
									</div>	
								
							</div>
						</div>	

						
											</div>	
				</div>
		</div>

		
	
			</div>




	  

       <?php include("footer.php"); ?>


</div>


<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
<script type="text/javascript" src="https://cdn.trustedsite.com/js/1.js" async></script>

   
</body>


</html>
